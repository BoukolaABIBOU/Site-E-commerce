@extends('_layout._ecommerce')

@section('content')
    @include('_includes._ecommerce._messages')
    <order-page :cart="cart"
                :stage="'{{ $stage }}'"
                :user_order="'{{ $order }}'">
    </order-page>
    
@endsection

@section('scripts')
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    <script type="text/javascript">
        console.log(document.getElementById ("pay-btn"));     
        console.log(4444);      
        FedaPay.init('#pay-btn', {
        public_key: 'pk_sandbox_mSbAFlIEhe4MY-4BGuHc84H6E',
        transaction: {
        amount: 1000,
        description: 'Acheter mon produit'
        },
        customer: {
        email: 'johndoe@gmail.com',
        lastname: 'Doe',
        firstname: 'John',
        }
    });
</script>

@endsection