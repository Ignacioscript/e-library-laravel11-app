<div>
    <nav class="mt-4">
        <ul class="flex space-x-4">
            <li><a href="/" class="{{ request()->is('/') ? 'text-blue-400 font-semibold' : 'text-white hover:underline' }}">HOME</a></li>
            <li><a href="/books" class="{{ request()->is('books') ? 'text-blue-400 font-semibold' : 'text-white hover:underline' }}">BOOKS</a></li>
            <li><a href="/members" class="{{ request()->is('members') ? 'text-blue-400 font-semibold' : 'text-white hover:underline' }}">MEMBERS</a></li>
            <li><a href="/loans" class="{{ request()->is('loans') ? 'text-blue-400 font-semibold' : 'text-white hover:underline' }}">LOANS</a></li>

        </ul>
    </nav>
</div>

