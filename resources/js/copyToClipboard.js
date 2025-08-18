export default function copyToClipboardComponent(closestEl = '[data-code-block]', inTabs = false) {
    return {
        copiedState: '',
        handleCopy() {
            let parentEl = this.$el.closest(closestEl);
            if (inTabs) {
                parentEl = parentEl.querySelector(`[data-tab-panel][data-state="active"]`);
            }
            const snippetEl = parentEl?.querySelector('[data-code-snippet] pre');
            if (snippetEl) {
                this.copyToClipboard({
                    snippet: snippetEl,
                    onCopy: () => {
                        this.copiedState = 'copied';
                    },
                    onCopyCompleted: () => {
                        this.copiedState = '';
                    }
                });
            }
        },
        copyToClipboard({ snippet, onCopy, onCopyCompleted, timeout = 1000 }) {
            if (snippet instanceof HTMLElement || typeof snippet === 'string') {
                let valueToCopy = '';
                let timer = null;

                const startTimeout = (callback) => {
                    timer = setTimeout(() => {
                        callback();
                    }, timeout);
                };

                const cancelTimeout = () => {
                    if (timer) clearTimeout(timer);
                };

                valueToCopy = typeof snippet === 'string' ? snippet : snippet.innerText;

                onCopy && onCopy();
                navigator.clipboard.writeText(valueToCopy).then(() => {
                    if (onCopyCompleted) {
                        startTimeout(() => {
                            onCopyCompleted();
                            cancelTimeout();
                        });
                    }
                });
            }
        }
    };
}
