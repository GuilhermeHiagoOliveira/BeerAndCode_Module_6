<div @class(['p-4 rounded-md', $getBgClass])>
    <div class="flex">
        <div>
            <h3 @class(['text-sm font-medium', $getTitleClass])>{{ $title }}</h3>
            <div @class(['mt-2 text-sm', $getMessageClass])>
                <span>{{ $message }}</span>
            </div>
        </div>
    </div>
</div>
