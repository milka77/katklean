<x-layout>
  @section('content')
    <div class="md:mx-20 lg:mx-50 py-15 px-2 md:px-0">
      <h2 class="text-center text-4xl md:text-5xl font-semibold pb-7 text-black">Log in</h2>

      <div class="border w-full md:w-125 mx-auto rounded-2xl border-slate-300 bg-slate-100 p-2 md:p-5">
        <p class="text-center  pb-3">Log in KatKlean for easy appointment scheduling <br>and manage all your bookings online.</p>
        
        <div class="border rounded-2xl border-slate-300 bg-stone-50 pt-3">
          <form action="{{ route('loginUser') }}" method="post">
            @csrf
            <div class="flex flex-col px-5 pb-2">
              <label class="pl-2 pb-1" for="email">Email</label>
              <input class="border rounded-md border-slate-300 pl-2 py-1 @error('email') border-red-500 @enderror" 
                type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
              @error('email')
                <div class="text-red-500 italic text-sm pl-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="flex flex-col px-5 pb-2">
              <label class="pl-2 pb-1" for="email">Password</label>
              <input class="border rounded-md border-slate-300 pl-2 py-1 @error('password') border-red-500 @enderror" 
                type="password" name="password" id="password" placeholder="Enter your password"/>
              @error('password')
                <div class="text-red-500 italic text-sm pl-2">
                  {{ $message }}  
                </div>
              @enderror 
            </div>
            <div class="flex flex-row px-5 pb-5">
              <input class="border rounded-md border-slate-300 ml-1 pl-2 py-1" type="checkbox" name="remember" id="remember" value="{{ old('remember') }}">
              <label class="pl-2" for="remember">Remember Me</label>
            </div>
            <div class="flex flex-col px-5 pb-2 items-center">
              <button type="submit" class="mt-5 bg-slate-700 hover:bg-slate-900 text-white text-lg h-10 w-56 px-4 rounded-full active:scale-95 transition cursor-pointer">Log in</button>
            </div>
            
          </form>
          <div class="text-center px-5 pb-7">
            <p class="pb-2 text-sm border-b border-slate-300"><a class="font-semibold hover:text-slate-300 transition" href="#">Forgot Password?</a></p>
            <p class="pt-2 text-sm">Don't have an account? <a class="font-semibold" href="{{ route('signup') }}">Sign up</a></p>
          </div>
        </div>
      
      
      </div>
    </div>
  @endsection
</x-layout>