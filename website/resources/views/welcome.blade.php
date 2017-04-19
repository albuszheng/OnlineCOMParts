@extends('layouts.master')

@section('title')
Welcome to OCPS
@endsection

@section('content')
<div class="row">
    <div class="col-4 cato-item">
        <div class="cato-img cpu">
            <div class="rounded-circle" style="background-image: url('/img/cpu.png'); height: 320px; background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
        </div>
        <h2 class="cato-title cpu">
            <a href="/products/l/cpu">CPU</a>
        </h2>
        <p class="cato-description cpu">
            A central processing unit (CPU) is the electronic circuitry within a computer that carries out the instructions of a computer program by performing the basic arithmetic, logical, control and input/output (I/O) operations specified by the instructions. The computer industry has used the term "central processing unit" at least since the early 1960s. Traditionally, the term "CPU" refers to a processor, more specifically to its processing unit and control unit (CU), distinguishing these core elements of a computer from external components such as main memory and I/O circuitry.
        </p>
    </div>

    <div class="col-4 cato-item">
        <div class="cato-img motherboard">
            <div class="rounded-circle" style="background-image: url('/img/motherboard.png'); height: 320px; background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
        </div>
        <h2 class="cato-title cpu">
            <a href="/products/l/motherboard">Motherboard</a>
        </h2>
        <p class="cato-description motherboard">
            A motherboard (sometimes alternatively known as the mainboard, system board, baseboard, planar board or logic board, or colloquially, a mobo) is the main printed circuit board (PCB) found in general purpose microcomputers and other expandable systems. It holds and allows communication between many of the crucial electronic components of a system, such as the central processing unit (CPU) and memory, and provides connectors for other peripherals. Unlike a backplane, a motherboard usually contains significant sub-systems such as the central processor, the chipset's input/output and memory controllers, interface connectors, and other components integrated for general purpose use.
        </p>
    </div>

    <div class="col-4 cato-item">
        <div class="cato-img memory">
            <div class="rounded-circle" style="background-image: url('/img/memory.png'); height: 320px; background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
        </div>
        <h2 class="cato-title memory">
            <a href="/products/l/memory">Memory</a>
        </h2>
        <p class="cato-description memory">
            Random-access memory is a form of computer data storage which stores frequently used program instructions to increase the general speed of a system. A random-access memory device allows data items to be read or written in almost the same amount of time irrespective of the physical location of data inside the memory. In contrast, with other direct-access data storage media such as hard disks, CD-RWs, DVD-RWs and the older drum memory, the time required to read and write data items varies significantly depending on their physical locations on the recording medium, due to mechanical limitations such as media rotation speeds and arm movement.
        </p>
    </div>

    <div class="col-4 cato-item">
        <div class="cato-img gpu">
            <div class="rounded-circle" style="background-image: url('/img/gpu.png'); height: 320px; background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
        </div>
        <h2 class="cato-title cpu">
            <a href="/products/l/gpu">GPU</a>
        </h2>
        <p class="cato-description gpu">
            A graphics processing unit (GPU), occasionally called visual processing unit (VPU), is a specialized electronic circuit designed to rapidly manipulate and alter memory to accelerate the creation of images in a frame buffer intended for output to a display device. GPUs are used in embedded systems, mobile phones, personal computers, workstations, and game consoles. Modern GPUs are very efficient at manipulating computer graphics and image processing, and their highly parallel structure makes them more efficient than general-purpose CPUs for algorithms where the processing of large blocks of data is done in parallel. In a personal computer, a GPU can be present on a video card, or it can be embedded on the motherboard or—in certain CPUs—on the CPU die.
        </p>
    </div>

    <div class="col-4 cato-item">
        <div class="cato-img hard-drive">
            <div class="rounded-circle" style="background-image: url('/img/harddrive.png'); height: 320px; background-position: center; background-size: contain; background-repeat: no-repeat;"></div>
        </div>
        <h2 class="cato-title hard-drive">
            <a href="/products/l/harddrive">Hard Drive</a>
        </h2>
        <p class="cato-description hard-drive">
            A hard disk drive (HDD), hard disk, hard drive or fixed disk is a data storage device that uses magnetic storage to store and retrieve digital information using one or more rigid rapidly rotating disks (platters) coated with magnetic material. The platters are paired with magnetic heads, usually arranged on a moving actuator arm, which read and write data to the platter surfaces. Data is accessed in a random-access manner, meaning that individual blocks of data can be stored or retrieved in any order and not only sequentially. HDDs are a type of non-volatile storage, retaining stored data even when powered off.
        </p>
    </div>
</div>

@endsection