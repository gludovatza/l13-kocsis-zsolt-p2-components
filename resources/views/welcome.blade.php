<x-layout>
    <x-section>
        Hello world again!
    </x-section>
    <x-section type="success">
        Hello world 1x!
    </x-section>
    <x-section type="doubtful">
        Hello world 2x!
    </x-section>
    <x-section type="unsuccessful" class="mt-10">
        Hello world 3x!
    </x-section>

    <h1>Class based components</h1>
    <div class="m-8">
        <x-alert title="Danger" message="Something not ideal might be happening." type="danger">
            <a href="#" class="text-blue-700 underline">Danger URL</a>
        </x-alert>
    </div>
    <div class="m-8">
        <x-alert title="Information" message="Everything is OK." type="success">
            <a href="#" class="text-blue-700 underline">Success URL</a>
        </x-alert>
    </div>
</x-layout>
