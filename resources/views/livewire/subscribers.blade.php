<div>
    <form wire:submit.prevent="createSubscriber">
        <div class="position-relative w-100 mt-3">
            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                placeholder="Enter Your Email" wire:model.defer="state.email" style="height: 48px;">
            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                    class="fa fa-paper-plane text-primary fs-4"></i></button>
        </div>
    </form>
</div>
