<div>
    <form wire:submit.prevent="save">
        @include('livewire-wizard::steps-header')
        <div class="container p-4 mx-auto">

            {{ $this->getCurrentStep() }}
        </div>

        @include('livewire-wizard::steps-footer')
    </form>
</div>
