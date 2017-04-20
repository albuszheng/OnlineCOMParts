<hr>
<h4>Specs</h4>
<div class="row specs">
    <div class="col-6">
        <p><span class="spec-name">Name</span>: <span class="spec-value">{{ $product->ProductName }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Manufacturer</span>: <span class="spec-value">{{ $product->$kind->Manufacturer }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Form</span>: <span class="spec-value">{{ $product->$kind->Form }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Type</span>: <span class="spec-value">{{ $product->$kind->Type }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Capacity</span>: <span class="spec-value">{{ $product->$kind->Capacity }}GB</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Cache</span>: <span class="spec-value">{{ $product->$kind->Cache }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Price/GB</span>: <span class="spec-value">${{ $product->$kind->PricePerGB }}</span></p>
    </div>

</div>