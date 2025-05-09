<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Input Data Siswa SMKS BRAHARI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="post" action="{{ route('student.store') }}" class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="nisn" :value="__('NISN')" />
                            <x-text-input id="nisn" name="nisn" type="text" class="mt-1 block w-full" :value="old('nisn')" autofocus required />
                            <x-input-error class="mt-2" :messages="$errors->get('nisn')" />
                        </div>

                        <div>
                            <x-input-label for="nis" :value="__('NIS')" />
                            <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" :value="old('nis')" />
                            <x-input-error class="mt-2" :messages="$errors->get('nis')" />
                        </div>

                        <div>
                            <x-input-label for="name" :value="__('Nama')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="address" :value="__('Alamat')" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address')" />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>

                        <div>
                            <x-input-label for="phone" :value="__('Nomor Telepon')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone')" />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>

                        <div>
                            <x-input-label for="grade_id" :value="__('Kelas')" />
                            <select id="grade_id" name="grade_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach($grades as $grade)
                                    <option value="{{ $grade->id }}" @selected(old('grade_id') == $grade->id)>
                                        {{ $grade->grade_name . ' - ' . $grade->skill_competency }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('grade_id')" />
                        </div>

                        <div>
                            <x-input-label for="school_fee_id" :value="__('SPP')" />
                            <select id="school_fee_id" name="school_fee_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach($fees as $fee)
                                    <option value="{{ $fee->id }}" @selected(old('school_fee_id') == $fee->id)>
                                        {{ $fee->year . ' - ' . "Rp" . number_format($fee->nominal,2,',','.') }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('school_fee_id')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Simpan') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
