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
        <p><span class="spec-name">CPU Socket</span>: <span class="spec-value">{{ $product->$kind->SocketCPU }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Form Factor</span>: <span class="spec-value">{{ $product->$kind->FormFactor }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">RAM Slots</span>: <span class="spec-value">{{ $product->$kind->RAMSlots }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Max RAM</span>: <span class="spec-value">{{ $product->$kind->MaxRAM }}GB</span></p>
    </div>

</div>