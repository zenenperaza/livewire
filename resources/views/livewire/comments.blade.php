<div>
    @if ($comments)
        
        <div class="bg-white shadow rounded-lg p-6 mb-3 ">
            <ul>
                @foreach ($comments as $comment)
                    <li>{{ $comment }}</li>
                @endforeach
            </ul>
        </div>
    
    @endif
</div>
