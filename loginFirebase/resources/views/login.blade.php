<!-- filepath: c:\Users\ALBERTO\Documents\Programacion\Laravel\loginFirebase\resources\views\login.blade.php -->
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f9;">
    <form method="POST" style="background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px;">
        @csrf
        <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Login</h2>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="password" style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Password</label>
            <input id="password" type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 20px;">
            <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Login</button>
        </div>
        <div style="text-align: center; margin-bottom: 10px;">
            <a href="" style="color: #007bff; text-decoration: none;">Forgot Your Password?</a>
        </div>
        <div style="text-align: center;">
            <a href="" style="color: #007bff; text-decoration: none;">Register</a>
        </div>
    </form>
</div>