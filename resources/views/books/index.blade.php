<x-app-layout>
    <div class="pb-12">
        <div class="relative py-16 px-4 border-b border-cyan-500/10 bg-gradient-to-b from-cyan-950/20 to-transparent">
            <div class="max-w-7xl mx-auto text-center">
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-4 italic">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-500 uppercase">
                        My Archive
                    </span>
                </h1>
                <p class="text-slate-400 text-lg max-w-xl mx-auto">Track your reading progress across the multiverse.</p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative -mt-10 mb-12">
                <div class="bg-[#1e293b]/80 backdrop-blur-xl border border-slate-700/50 p-4 rounded-2xl shadow-2xl flex flex-wrap gap-4 items-center">
                    <form action="{{ route('books.index') }}" method="GET" class="w-full flex flex-wrap gap-4">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name/author..." 
                               class="flex-1 bg-[#0f172a] border-slate-700 focus:border-cyan-500 focus:ring-cyan-500 rounded-xl text-slate-200">
                        
                        <select name="category" class="bg-[#0f172a] border-slate-700 text-slate-300 rounded-xl">
                            <option value="">All Categories</option>
                            <option value="Fiction" {{ request('category') == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                            <option value="Non-Fiction" {{ request('category') == 'Non-Fiction' ? 'selected' : '' }}>Non-Fiction</option>
                            <option value="Academic" {{ request('category') == 'Academic' ? 'selected' : '' }}>Academic</option>
                        </select>

                        <button type="submit" class="bg-cyan-500 hover:bg-cyan-400 text-slate-900 font-bold px-8 py-2 rounded-xl transition-all shadow-[0_0_20px_rgba(34,211,238,0.4)]">
                            SEARCH
                        </button>
                        <a href="{{ route('books.create') }}" class="bg-white/5 hover:bg-white/10 border border-slate-700 px-6 py-2 rounded-xl flex items-center font-bold">
                            + ADD BOOK
                        </a>
                    </form>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($books as $book)
                    <div class="group relative bg-[#1e293b]/30 border border-slate-800 hover:border-cyan-500/50 rounded-2xl p-6 transition-all duration-300 hover:-translate-y-2">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-cyan-400 border border-cyan-400/30 px-2 py-0.5 rounded">
                                {{ $book->category }}
                            </span>
                            <div class="text-amber-400 font-bold text-sm">★ {{ $book->rating }}.0</div>
                        </div>

                        <h3 class="text-xl font-bold text-white leading-tight mb-1">{{ $book->title }}</h3>
                        <p class="text-slate-500 text-xs uppercase tracking-widest mb-6">{{ $book->author }}</p>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-800">
                            <span class="text-[10px] font-bold {{ $book->status == 'Completed' ? 'text-emerald-400' : 'text-cyan-400' }}">
                                {{ strtoupper($book->status) }}
                            </span>
                            <div class="flex gap-2">
                                <a href="{{ route('books.edit', $book) }}" class="p-2 bg-slate-800 rounded-lg text-slate-400 hover:text-white transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20 bg-[#1e293b]/20 rounded-3xl border-2 border-dashed border-slate-800">
                        <p class="text-slate-500">No guides found in your archive.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>