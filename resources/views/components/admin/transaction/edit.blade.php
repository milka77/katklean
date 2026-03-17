<x-admin-layout>
  @section('content')
    <div class="w-full max-w-md mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Update Transaction</h2>
      <form action="{{ route('admin.transaction.update', $transaction) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        {{--   Trasnasction type     --}}
        <div>
          <label for="type" class="block text-sm font-medium ">Transaction Type<span class="text-red-500">*</span></label>
          <select name="type" id="type" required
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            <option value="" selected disabled>Select Transaction Type</option>
            <option value="income" {{ $transaction->type === 'income' ? 'selected' : '' }}>Income</option>
            <option value="expense" {{ $transaction->type === 'expense' ? 'selected' : '' }}>Expense</option>
          </select>
          @error('type')
            <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
          @enderror
        </div>
        {{--  End of Trasnasction type     --}}

        {{--  Date --}}
        <div>
          <label for="date" class="block text-sm font-medium ">Transaction Name<span class="text-red-500">*</span></label>
          <input type="date" name="date" id="date" required
                 class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                 value="{{ $transaction->date }}">
          @error('date')
            <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
          @enderror
        </div>
        {{--  End of Date --}}

        {{--  Amount  --}}
        <div>
          <label for="amount" class="block text-sm font-medium ">Amount (£)<span class="text-red-500">*</span></label>
          <input type="number" name="amount" id="amount" required min="0" step="0.01"
                 class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                 value="{{ $transaction->amount }}">
        </div>
        {{--  End of Amount  --}}

        {{--  Expenses      --}}
        <div id="expense" class="border-y border-slate-300 py-3 {{ $transaction->type == 'income' ? 'sr-only' : '' }}">
          <p class="text-xl font-semibold text-center">Expense</p>

          {{--  Exp_shop --}}
          <div>
            <label for="exp_shop" class="block text-sm font-medium ">Shop</label>
            <input type="text" name="exp_shop" id="exp_shop"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                   value="{{ $transaction->exp_shop }}">
            @error('exp_shop')
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          {{--  end of Exp_shop --}}

          {{--  Exp_product --}}
          <div>
            <label for="exp_product" class="block text-sm font-medium ">Product</label>
            <input type="text" name="exp_product" id="exp_product"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                   value="{{ $transaction->exp_product }}">
            @error('exp_product')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          {{--  End of Exp_product --}}
        </div>
        {{--  End of Expenses      --}}

        {{-- Income        --}}
        <div id="income" class="border-y border-slate-300 py-3 {{ $transaction->type == 'expense' ? 'sr-only' : '' }}">
          <p class="text-xl font-semibold text-center">Income</p>

          {{--  Description --}}
          <div>
            <label for="description" class="block text-sm font-medium ">Description</label>
            <input type="text" name="description" id="description"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                   value="{{ $transaction->description }}">
            @error('description')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          {{--  End of Description --}}

          {{--  Service --}}
          <div>
            <label for="service" class="block text-sm font-medium ">Service</label>
            <select name="service" id="service"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
              <option value="" selected>Select Service</option>
              <option value="1" {{ $transaction->service == '1' ? 'selected' : '' }}>Domestic cleaning</option>
              <option value="2" {{ $transaction->service == '2' ? 'selected' : '' }}>Deep cleaning</option>
              <option value="3" {{ $transaction->service == '3' ? 'selected' : '' }}>EoT cleaning</option>
            </select>
            @error('service')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          {{--  End of Service --}}

          {{--  Booking reference --}}
          <div>
            <label for="booking_reference" class="block text-sm font-medium ">Booking reference</label>
            <input type="text" name="booking_reference" id="booking_reference"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                   value="{{ $transaction->booking_reference }}">
            @error('booking_reference')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          {{--  End of Booking reference --}}

          {{--  Address --}}
          <div>
            <label for="address" class="block text-sm font-medium ">Address</label>
            <input type="text" name="address" id="address"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                   value="{{ $transaction->address }}">
            @error('address')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          {{--  End of Address --}}

          {{--  Distance --}}
          <div>
            <label for="distance" class="block text-sm font-medium ">Distance (miles)</label>
            <input type="text" name="distance" id="distance"
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                   value="{{ $transaction->distance }}">
            @error('address')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          {{--  End of Distance --}}
        </div>
        {{--  End of Income        --}}

        <div class="text-center">
          <button type="submit"
                  class="px-4 py-2 bg-slate-700 text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-500 rounded">
            Update
          </button>

          <a href="{{ route('admin.transaction.index') }}" class="px-4 py-2 border border-red-500 text-red-500 rounded hover:bg-red-500 hover:text-white">
              Cancel
          </a>
        </div>
      </form>
    </div>
  @endsection

  @section('extra-js')
  <script>
    let typeInput = document.getElementById('type');
    let expensesDiv = document.getElementById('expense');
    let incomeDiv = document.getElementById('income');

    typeInput.addEventListener('change', function() {
      if (this.value === 'income') {
        expensesDiv.classList.add('sr-only');
        incomeDiv.classList.remove('sr-only');
      } else if (this.value === 'expense') {
        expensesDiv.classList.remove('sr-only');
        incomeDiv.classList.add('sr-only');
      }
    });

  </script>

  @endsection
</x-admin-layout>
