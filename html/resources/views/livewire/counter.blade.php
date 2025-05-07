<div class="counter">
    <p class="text-[#706f6c] dark:text-[#A1A09A]">Livewire test:</p>
    <button wire:click="increment">Add +1</button>
    <div>{{ $count }}</div>

    <style>
        .counter {
            display: flex;
            align-items: center;
            margin-block: 2rem;
            gap: 1rem;

            div {
                margin-left: 10px;
                font-size: 1rem;
                font-weight: bold;
            }
            button {
                padding: 0.5rem 1rem;
                font-size: 1rem;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 0.5rem;
                cursor: pointer;
            }
            button:hover {
                background-color: #0056b3;
            }
            button:active {
                background-color: #004085;
            }
        }
    </style>
</div>


