<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        $user = \Auth::user();
        $amount = $request->amount;

        // dd($request);
        /* Remplacez VOTRE_CLE_API par votre véritable clé API */
        \FedaPay\FedaPay::setApiKey("sk_live_XgBqNG1lXv9GsQ_xBZ1wJMJg");
        //\FedaPay\FedaPay::setApiKey("sk_sandbox_W4C3EQbezHd-QkGB_LwoVFpL");

        /* Précisez si vous souhaitez exécuter votre requête en mode test ou live */
        \FedaPay\FedaPay::setEnvironment('live'); //ou setEnvironment('live');

        /* Créer la transaction */
        $transaction = \FedaPay\Transaction::create(array(
            "description" => "Transaction for " . $user->email,
            "amount" => 100,// $amount,
            "currency" => ["iso" => "XOF"],
            "callback_url" => "https://127.0.0.1:8000/payment/callback",
            "customer" => [
                "firstname" => "John",
                "lastname" => "Doe",
                "email" => "john.doe@example.com",
                "phone_number" => [
                    "number" => $request->number,
                    "country" => "bj"
                ]
            ]
        ));

        switch ($transaction->status) {
            case 'pending':
                return response()->json([
                    'success'=>"Votre commande a été validée. Veuillez consulter votre boite de messagerie."
                ]);
                break;
            
            default:
                return response()->json([
                    'fail'=>"Une erreur s'est produite lors du processus de paiement. Veuillez réessayer plus tard"
                ]);
                break;
        }
    }

    public function callback(Request $request)
    {
        dd($request);
    }
}
