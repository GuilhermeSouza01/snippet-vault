<x-layout>
    <form action="/login" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto mt-6">
            <legend class="fieldset-legend">Log in</legend>

            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" required />
            <x-forms.error name="email" />

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required/>

            <button class="btn btn-neutral mt-4">Log in</button>
        </fieldset>
    </form>

</x-layout>
