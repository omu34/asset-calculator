<div class=" flex-col justify-center mx-auto max-w-screen-sm">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <tr id="result-row" class=" relative overflow-x-auto shadow-md  py-8 hover:shadow-green-800  ">
                <td class="px-6 py-4 font-semibold text-white">
                    @isset($monthlyPayment)
                    <p class="text-lg ">Monthly Payment: {{ number_format($monthlyPayment, 2) }} </p>
                    @endisset
                </td>
                <td class="px-6 py-4 font-semibold text-white">
                    @isset($monthlyPayment)
                    <p class="text-lg">Total Interest Paid: {{ number_format($totalInterest, 2) }}</p>
                    @endisset
                </td>
                <td class="px-6 py-4 font-semibold text-white">
                    @isset($monthlyPayment)
                    <p class="text-md">Total Cost of Ownership: {{ number_format($totalCost, 2) }}</p>
                    @endisset
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
