<form wire:submit.prevent='submit'>
    <div class="flex items-center gap-2 pb-4">
        @if ($application->human_name)
            <h2>{{ Str::headline($application->human_name) }}</h2>
        @else
            <h2>{{ Str::headline($application->name) }}</h2>
        @endif
        <x-forms.button type="submit">Save</x-forms.button>
        <a target="_blank" href="{{ $application->documentation() }}">Documentation <x-external-link /></a>
    </div>
    <div class="flex gap-2">
        <x-forms.input label="Name" id="application.human_name" placeholder="Name"></x-forms.input>
        @if (isset($application->fqdn))
            <x-forms.input label="FQDN" required id="application.fqdn"></x-forms.input>
        @endisset
</div>
</form>
