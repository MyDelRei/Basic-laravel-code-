@extends('layouts.app')

@section('content')

<div class="post-container flex justify-center">
    <div class="content bg-white w-6/12 p-6 rounded-lg flex justify-center items-center">
        <div class="relative flex flex-col rounded-xl bg-transparent">
            <h4 class="block text-xl font-medium text-slate-800">
              Sign Up
            </h4>
            <p class="text-slate-500 font-light">
              Nice to meet you! Enter your details to register.
            </p>
            <form  action="{{ route('register') }}" method="POST" class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
                @csrf
              <div class="mb-1 flex flex-col gap-6">
                <div class="w-full max-w-sm min-w-[200px]">
                  <label class="block mb-2 text-sm text-slate-600">
                    Your Name
                  </label>
                  <input type="text" name="name" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border  rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow
                    @error('name')
                        border-rose-700
                    @else
                        border-slate-200
                    @enderror"
                    placeholder="Your Name"
                    value="{{ old('name') }}" />

                  @error('name')

                <div class="message text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                      
                  @enderror

                </div>

                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">
                      Username
                    </label>
                    <input type="text" name="username" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Username" 
                    @error('username')
                        border-rose-700
                    @else
                        border-slate-200
                    @enderror"
                    placeholder="username"
                    value="{{ old('username') }}"/>
                    @error('username')

                    <div class="message text-red-600 mt-2 text-sm">
                        {{ $message }}
                    </div>
                          
                      @enderror
                  </div>

                <div class="w-full max-w-sm min-w-[200px]">
                  <label class="block mb-2 text-sm text-slate-600">
                    Email
                  </label>
                  <input type="email"  name="email" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Your Email" 
                    @error('email')
                        border-rose-700
                    @else
                        border-slate-200
                    @enderror"
                    placeholder="email"
                    value="{{ old('email') }}"/>
                  @error('email')

                  <div class="message text-red-600 mt-2 text-sm">
                      {{ $message }}
                  </div>
                        
                    @enderror
                </div>
                <div class="w-full max-w-sm min-w-[200px]">
                  <label class="block mb-2 text-sm text-slate-600">
                    Password
                  </label>
                  <input type="password" for="password" name="password" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Your Password" 
                  @error('password')
                    border-rose-700
                  @else
                    border-slate-200
                  @enderror"
                    placeholder="password"
                    value=""/>
                  @error('password')

                  <div class="message text-red-600 mt-2 text-sm">
                      {{ $message }}
                  </div>
                        
                    @enderror
                </div>

                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">
                      Confirm Password
                    </label>
                    <input type="password" for="password_confirmation" name="password_confirmation" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Confirm Password"
                    @error('password_confirmation')
                        border-rose-700
                    @else
                        border-slate-200
                    @enderror"
                    placeholder="confirm password"
                    value=""/>
                     @error('password_confirmation')

                     <div class="message text-red-600 mt-2 text-sm">
                         {{ $message }}
                     </div>
                           
                       @enderror
                  </div>
              </div>
              
              <button class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit">
                Sign Up
              </button>
            
            </form>
          </div>
    </div>
</div>
    
@endsection