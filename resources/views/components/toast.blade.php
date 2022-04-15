<div
    x-data="{
        open: false,
        title: '',
        message: '',
        type: 'success',
        openToast(toast) {
            this.type = toast.type ?? 'info',
            this.title = toast.title ?? ''
            this.message = toast.message
            this.open = true
            setTimeout(() => {
                this.open = false
            }, 5000)
        },
        bgClass() {
            if (this.type === 'success') return 'bg-green-500';
            if (this.type === 'info') return 'bg-blue-500';
            if (this.type === 'warning') return 'bg-orange-500';
            if (this.type === 'error') return 'bg-red-500';
        }
    }"
    @toast.window="openToast($event.detail)"
    x-show="open"
    class="w-96 p-4 rounded h-32 fixed bottom-4 right-4 transform-gpu transition-transform duration-400 ease z-50"
    :class="bgClass"
    x-transition:enter-start="translate-y-full"
    x-transition:enter-end="translate-y-0"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="translate-y-full"
    >
    <p class="text-white text-lg"><strong x-text="title"></strong></p>
    <p class="mt-2 text-white" x-text="message"></p>
</div>


