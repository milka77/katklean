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

            </form>
        </div>

        <table class="min-w-full bg-white">
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
                <tr>
                    <td class="py-2 px-4 border-b">{{ $transaction->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->date }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->type }}</td>
                    <td class="py-2 px-4 border-b text-right">£ {{ $transaction->amount }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->user_id }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->description }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->booking_reference }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->address }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->service }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->distance }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->exp_shop }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->exp_product }}</td>
                    <td class="py-2 px-4 border-b"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex gap-3 mt-4">
            <p>Total records: {{ $transactions->total() }} <span class="pl-2">|</span></p>
            <p>Sum: £ {{ $transactions->sum('amount') }}</p>
        </div>
    </div>
    @endsection
</x-admin-layout>
