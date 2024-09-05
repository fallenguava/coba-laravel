<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card bg-light-transparent">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>
                <form action="{{ route('login') }}" method="POST"> <!-- Add action and method -->
                    @csrf <!-- CSRF token for security -->
                    <!-- Username Field -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <!-- Password Field -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>
                    <!-- Login Button -->
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-light-transparent {
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        border-radius: 15px; /* Rounded corners */
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    }
</style>
