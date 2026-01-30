<x-layout>
  @section('content')
    <div class="md:mx-20 lg:mx-50 py-15 px-2 md:px-0">
      <h2 class="text-center text-4xl md:text-5xl font-semibold pb-7 text-black">Sign Up</h2>

      <div class="border w-full md:w-125 mx-auto rounded-2xl border-slate-300 bg-slate-100 p-2 md:p-5">
        <p class="text-center  pb-3">Join KatKlean for easy appointment scheduling <br>and manage all your bookings online.</p>
        
        <div class="border rounded-2xl border-slate-300 bg-stone-50 pt-3">
          <form action="{{ route('auth.store') }}" method="POST">
            @csrf

            <div class="flex flex-col px-5 pb-2">
              <label class="pl-2 pb-1" for="first_name">First name</label>
              <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="first_name" id="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}">
              @error('first_name')
                <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
              @enderror
            </div>

            <div class="flex flex-col px-5 pb-2">
              <label class="pl-2 pb-1" for="last_name">Last Name</label>
              <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="last_name" id="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}">
              @error('last_name')
                <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p> 
              @enderror
            </div>

            <div class="flex flex-col px-5 pb-2">
              <label class="pl-2 pb-1" for="email">Email</label>
              <input class="border rounded-md border-slate-300 pl-2 py-1" type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
              @error('email')
                <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
              @enderror
            </div>

            <div class="flex flex-col px-5 pb-2">
              <label class="pl-2 pb-1" for="password">Password</label>
              <input class="border rounded-md border-slate-300 pl-2 py-1" type="password" name="password" id="password" placeholder="Enter your password">
              @error('password')  
                <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>                
              @enderror
            </div>
            
            <div class="flex flex-col px-5 pb-2">
              <label class="pl-2 pb-1" for="password_confirmation">Password confirmation</label>
              <input class="border rounded-md border-slate-300 pl-2 py-1 @error('password_confirmation') border-red-500 @enderror" type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password again">
              @error('password_confirmation')  
                <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>                
              @enderror
            </div>

            <div class="flex flex-col px-5 pb-2 items-center">
              <button type="submit" class="mt-5 bg-slate-700 hover:bg-slate-900 text-white text-lg h-10 w-56 px-4 rounded-full active:scale-95 transition cursor-pointer">Sing Up</button>
            </div>
            
          </form>
          <div class="text-center px-5 pb-7">
            <p class="pb-2 text-sm border-b border-slate-300"><a class="font-semibold hover:text-slate-300 transition" href="#">Forgot Password?</a></p>
            <p class="pt-2 text-sm">You already have an account? <a class="font-semibold" href="{{ route('login') }}">Log in</a></p>

          </div>
        </div>
      
      
      </div>
    </div>
  @endsection
</x-layout>