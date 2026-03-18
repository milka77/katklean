<x-admin-layout>
    @section('content')
    <div class="w-full mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Transactions</h2>

        <div class="w-full mx-auto">
            <form method="GET" action="{{ route('admin.transaction.index') }}" class="flex gap-4 mb-6">

                {{-- Type filter --}}
                <select id="type-filter" name="type" class="border  rounded px-3 py-2">
                    <option value="">All Types</option>
                    <option value="income" {{ request('type') == 'income' ? 'selected' : '' }}>Income</option>
                    <option value="expense" {{ request('type') == 'expense' ? 'selected' : '' }}>Expense</option>
                </select>

                {{-- Date from --}}
                <input id="date-from" type="date" name="date_from"
                       value="{{ request('date_from') }}"
                       class="border rounded px-3 py-2">

                {{-- Date to --}}
                <input id="date-to" type="date" name="date_to"
                       value="{{ request('date_to') }}"
                       class="border rounded px-3 py-2">

                <button class="bg-slate-700 hover:bg-slate-800 text-white px-4 py-2 rounded cursor-pointer">
                    Filter
                </button>

                @if(request()->hasAny(['type','date_from','date_to']))
                <div class="border border-red-500 text-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded cursor-pointer" >
                    <a href="{{ route('admin.transaction.index') }}">Reset</a>
                </div>
                @endif

                <div class="border border-green-500 hover:bg-green-500  text-green-500 hover:text-white px-4 py-2 rounded cursor-pointer">
                    <a href="{{ route('admin.transaction.create') }}" >
                        Add Transaction
                    </a>
                </div>

            </form>
        </div>

        <div class="grid grid-cols-4 gap-4 mt-4">
            {{-- Sum Widget  --}}
            <div class="rounded-xl border border-slate-300 bg-white p-5  md:p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-700 ">
                    <i class="fa-solid text-white fa-money-bill-transfer"></i>
                </div>

                <div class="mt-5 flex items-end justify-between">
                    <div>
                        <span class="text-sm ">Summary</span>
                        <h4 class="text-3xl font-bold ">
                            £ {{ $income - $expense }}
                        </h4>
                    </div>
                </div>
            </div>
            {{-- End of Sum Widget  --}}

            {{-- Income Widget  --}}
            <div class="rounded-xl border border-slate-300 bg-white p-5  md:p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-700 ">
                    <i class="fa-solid text-white fa-money-bill-transfer"></i>
                </div>

                <div class="mt-5 flex items-end justify-between">
                    <div>
                        <span class="text-sm ">Income</span>
                        <h4 class="text-3xl font-bold">
                            £ {{ $income }}
                        </h4>
                    </div>
                </div>
            </div>
            {{-- End of Income Widget  --}}

            {{-- Expense Widget  --}}
            <div class="rounded-xl border border-slate-300 bg-white p-5  md:p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-700 ">
                    <i class="fa-solid text-white fa-money-bill-transfer"></i>
                </div>

                <div class="mt-5 flex items-end justify-between">
                    <div>
                        <span class="text-sm ">Expense</span>
                        <h4 class="text-3xl font-bold text-red-500">
                            £ {{ $expense }}
                        </h4>
                    </div>
                </div>
            </div>
            {{-- End of Expense Widget  --}}

            {{-- Total Records Widget  --}}
            <div class="rounded-xl border border-slate-300 bg-white p-5  md:p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-700 ">
                    <i class="fa-solid text-white fa-money-bill-transfer"></i>
                </div>

                <div class="mt-5 flex items-end justify-between">
                    <div>
                        <span class="text-sm ">Total Records:</span>
                        <h4 class="text-3xl font-bold ">
                           {{ $transactions->total() }}
                        </h4>
                    </div>
                </div>
            </div>
            {{-- End of Total Records Widget  --}}
        </div>

        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b capitalize">ID</th>
                    <th class="py-2 px-4 border-b capitalize">Date</th>
                    <th class="py-2 px-4 border-b capitalize">Type</th>
                    <th class="py-2 px-4 border-b capitalize">Amount</th>
                    <th class="py-2 px-4 border-b capitalize">user</th>
                    <th class="py-2 px-4 border-b capitalize">description</th>
                    <th class="py-2 px-4 border-b capitalize">booking_reference</th>
                    <th class="py-2 px-4 border-b capitalize">address</th>
                    <th class="py-2 px-4 border-b capitalize">service</th>
                    <th class="py-2 px-4 border-b capitalize">distance</th>
                    <th class="py-2 px-4 border-b capitalize">exp_shop</th>
                    <th class="py-2 px-4 border-b capitalize">exp_product</th>
                    <th class="py-2 px-4 border-b capitalize">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr class="odd:bg-slate-200 even:bg-gray-100">
                    <td class="py-2 px-4 border-b">{{ $transaction->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->date }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->type }}</td>
                    <td class="py-2 px-4 border-b text-right">£ {{ $transaction->amount }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->user->first_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->description }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->booking_reference }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->address }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->service }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->distance }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->exp_shop }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->exp_product }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('admin.transaction.edit', $transaction->id) }}">
                            <i class="fa-regular fa-pen-to-square pr-1.5"></i>
                        </a>
                        <form action="{{ route('admin.transaction.destroy', $transaction->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cursor-pointer">
                                <i class="fa-regular fa-trash-can text-red-500"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @endsection
</x-admin-layout>
