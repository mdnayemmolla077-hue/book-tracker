<x-app-layout>
    <div class="py-12 bg-[#0f172a]">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#1e293b]/50 border border-slate-700 p-10 rounded-3xl shadow-2xl">
                <h2 class="text-3xl font-black text-white mb-8 tracking-tighter uppercase italic italic">Add New Entry</h2>
                
                <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Book Title</label>
                        <input type="text" name="title" class="w-full bg-[#0f172a] border-slate-700 rounded-xl text-white focus:ring-cyan-500 focus:border-cyan-500" required>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Author</label>
                            <input type="text" name="author" class="w-full bg-[#0f172a] border-slate-700 rounded-xl text-white" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Category</label>
                            <select name="category" class="w-full bg-[#0f172a] border-slate-700 rounded-xl text-white">
                                <option>Fiction</option>
                                <option>Non-Fiction</option>
                                <option>Academic</option>
                                <option>Sci-Fi</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Rating</label>
                            <select name="rating" class="w-full bg-[#0f172a] border-slate-700 rounded-xl text-white">
                                @for($i=1; $i<=5; $i++) <option value="{{$i}}">{{$i}} Stars</option> @endfor
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Status</label>
                            <select name="status" class="w-full bg-[#0f172a] border-slate-700 rounded-xl text-white">
                                <option>Want to Read</option>
                                <option>Reading</option>
                                <option>Completed</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-800">
                        <a href="{{ route('books.index') }}" class="text-slate-500 hover:text-white font-bold text-sm">CANCEL</a>
                        <button type="submit" class="bg-cyan-500 hover:bg-cyan-400 text-slate-900 font-black px-10 py-3 rounded-xl transition-all">
                            SAVE TO ARCHIVE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>