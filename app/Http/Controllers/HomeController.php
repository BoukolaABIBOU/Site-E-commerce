<?php

namespace App\Http\Controllers;
use\App\Http\Requests\ContactRequest;
use App\Library\Transformer\ProductsTransformer;
use App\Product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var Product
     */
    protected $products;

    /**
     * HomeController constructor.
     * @param Product $products
     */
    function __construct(Product $products)
    {
        $this->products = $products;
    }

    /**
     * Displays a list of products to the user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = $this->products->with(['sales' => function($query){
                return $query->current();
            }])->paginate(9);


            return view('ecommerce.welcome', [
                'products' => $products
            ]);
        } catch (\Exception $exception) {
            $exception->getMessage();
        }

    }

    /**
     * shows the about page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('ecommerce.about');
    }

    /**
     * shows the contact page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('ecommerce.contact');
    }

    public function sendEmail(ContactRequest $request)
    { 
        $mail_data = [
            'recipient' => 'abibouboukola@gmail.com',
            'fromEmail'=>$request->email,
            'fromName'=>$request->name,
            'body'=>$request->message,
            'subject'=>$request->subject
        ];
        Mail::send('ecommerce.email', $mail_data, function($message)use($mail_data){
            $message->to($mail_data['recipient'])->from($mail_data['fromEmail'], $mail_data['fromName'])->subject($mail_data['subject']);
        });
        return redirect()->back()->with('success', 'Email Sent !');
    }

    /**
     * shows the seller page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function seller()
    {
        return view('ecommerce.seller');
    }
}
