<!-- Registeration Start -->

<div class="container-xxl py-5" id="register">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="position-relative d-inline text-primary ps-4">Registeration</h6>
                        <h2 class="mt-2">Register for the IWD Event</h2>
                    </div>

                    <form wire:submit.prevent="submit" wire:ignore>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Name</label>
                                    @error('name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" wire:model="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="phone" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="location" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Location</label>
                                </div>
                            </div>
                            <div class="col-12">

                                <div class="form-floating">
                                    <select class="form-select" wire:model="session" aria-label="Default select example">
                                        <option></option>
                                        <option value="1">Building Supportive Communities for Women in Tech
                                        </option>
                                        <option value="2">Digital Skills for Female Entrpreneurs</option>
                                        <option value="3">Cybersecurity and Artificial Intelligence</option>
                                        <option value="">Breaking the glass Ceiling in Tech Careers</option>
                                    </select>
                                    <label for="message">Select your preferred breakout session</label>

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 blue-footer" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Registration End -->
