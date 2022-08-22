@extends('components.main.master')
    <x-navbar />


    <div class="login">
            <h1>Login</h1>

        <div class="login__container">
            <h1>Sign-in</h1>
            <form>
                <h5>Email</h5>
                <input type='text' />
                <h5>Password</h5>
                <input type="password"  />
                <button class="login__signInbutton" type="submit" >Sign In</button>
              
                <button class="login__registerbutton" >Create Your Acount</button>
            </form>
        </div>
    </div>

<x-footer/>
