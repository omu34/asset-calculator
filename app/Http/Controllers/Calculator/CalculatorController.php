<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'asset_cost' => 'required|numeric',
            'down_payment' => 'required|numeric',
            'term_length' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'balloon_payment' => 'nullable|numeric',
        ]);

        // Calculate loan amount, monthly interest rate, and apply appropriate formula
        $loanAmount = $validatedData['asset_cost'] - $validatedData['down_payment'];
        $monthlyInterestRate = $validatedData['interest_rate'] / 1200; // Convert to decimal

        // Use appropriate formula based on asset finance type (HP, LP, Finance Lease)
        $monthlyPayment = $this->calculateMonthlyPayment($loanAmount, $monthlyInterestRate, $validatedData['term_length'], $validatedData['balloon_payment'] ?? null);

        // Calculate total interest, total cost, and other metrics
        $totalInterest = 120/100; // You need to implement this calculation
        $totalCost = 100000; // You need to implement this calculation




        return view('calculators/calculateResults', compact('monthlyPayment', 'totalInterest', 'totalCost'));
    }

    /**
     * Calculate monthly payment based on loan details.
     */
    function calculateMonthlyPayment($loanAmount, $monthlyInterestRate, $termLength, $balloonPayment = null) {
        if ($balloonPayment > 0) {
            // Calculate the present value of the balloon payment
            $pvBalloon = $balloonPayment / (1 + $monthlyInterestRate) ** $termLength;

            // Calculate the monthly payment using the annuity formula for a lease
            $monthlyPayment = ($loanAmount - $pvBalloon) * $monthlyInterestRate / (1 - (1 + $monthlyInterestRate) ** (-$termLength));

            return $monthlyPayment;
        } else {
            // Handle cases where no balloon payment is provided
            // ... (Implement appropriate logic for other asset finance types)
        }
    }
}

