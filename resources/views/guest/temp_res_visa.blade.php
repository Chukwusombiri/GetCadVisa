<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Temporary resident visa</x-slot>
    </x-breadcrumb>
    {{-- header --}}
    <x-side-image-header :url="route('contact')" :source="asset('images/trv.jpg')" button-text="Speak to our team">
        <x-slot:maintitle>Temporary Resident Visas (Visitor Visas) For Canada</x-slot>
        <x-slot:subtitle>Canada welcomes millions of temporary residents each year. Find out if you'll need a Temporary Resident Visa to enter Canada.</x-slot>
    </x-side-image-header>  
    <!-- Page Content -->
    <section class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-y-8">
            <div class="lg:w-3/4 pr-8">                        
                <h2 class="text-4xl font-bold mb-4 text-gray-700">Overview</h2>
                <p class="text-gray-600 mb-2">Unless they are citizens of a visa-exempt country, individuals who wish to enter Canada for a temporary purpose, such as tourists, temporary foreign workers (individuals with work permits) and international students (individuals on study permits) must apply for and be granted a Temporary Resident Visa (TRV).</p>
                <p class="text-gray-600 mb-2">Citizens of visa-exempt countries intending to travel to Canada by air are expected to have applied for an obtained an electronic Travel Authorization (eTA) before their departure to Canada. Exceptions to this include citizens of the United States, who do not require a TRV or an electronic Travel Authorization (eTA), and Green Card holders in the United States, who need an eTA to come to Canada, regardless of their nationality. Unless otherwise exempt from the requirement to obtain a TRV or an eTA, individuals who require a TRV do not require an eTA, and vice versa.</p>
                <p class="text-gray-600 mb-2">The TRV is a document issued by a Canadian Immigration Visa Office outside Canada, showing that the holder has satisfied the requirements for admission to Canada as a visitor. TRVs may be for single entry or multiple entry. As a general rule, tourists are admitted for a period of six months. Temporary foreign workers and international students are admitted for varying periods of time, as determined on a case-by-case basis. Extensions may be applied for from within Canada.</p>
                <p class="text-gray-600 mb-4">It is important to note that possession of a valid TRV does not necessarily mean that the Officer at the Canadian Port of Entry will admit the visitor into Canada. At the Port of Entry, all visitors must demonstrate that the purpose of their visit to Canada is of a temporary nature. Officers at the Port of Entry will deny admission to all persons who, in their opinion, do not intend to leave Canada at the expiry of their visitor status.</p>
                <h3 class="text-gray-600 text-xl mb-2">Items to note:</h3>
                <ul class="ml-4 space-y-2 list-disc text-gray-600 mb-8">
                    <li>Certain applicants may need to undergo a medical examination. This pertains to some individuals who intend to remain in Canada and have recently visited certain countries, as well as persons who intend to work in certain occupations in Canada. <a href="{{route('visiting_canada')}}" class="text-red-600 hover:underline focus:underline">learn more</a>.</li>
                    <li>Criminality and medical issues may prevent a visitor from entering Canada.</li>
                    <li>Visitors to Canada must be able to prove their ability to support themselves during their intended temporary stay in Canada.</li>
                    <li>Citizens of certain countries may need to provide biometric information.</li>
                </ul>

                <h2 class="text-2xl font-bold mb-4 text-gray-700">Country Checklist: Temporary Resident Visas</h2>                                    

                <p class="text-gray-600 mb-4">TRVs are required for citizens of certain countries. The chart below outlines which individuals require a TRV and which individuals need an eTA in order to enter Canada.</p>

                <p class="text-gray-600 mb-4"><a class="text-red-600 hover:underline" href="{{route('temp_res_visa').'#A'}}">A</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#B'}}">B</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#C'}}">C</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#D'}}">D</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#E'}}">E</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#F'}}">F</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#G'}}">G</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#H'}}">H</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#I'}}">I</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#J'}}">J</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#K'}}">K</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#L'}}">L</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#M'}}">M</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#N'}}">N</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#O'}}">O</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#P'}}">P</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#Q'}}">Q</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#R'}}">R</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#S'}}">S</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#T'}}">T</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#U'}}">U</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#V'}}">V</a> | W | X | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#Y'}}">Y</a> | <a class="text-red-600 hover:underline"

                    href="{{route('temp_res_visa').'#Z'}}">Z</a>

                </p>  

                <div class="w-full ">

                    <table class="overflow-scroll table-auto">

                        <thead>

                            <tr class="bg-gray-100">

                            <th class="px-4 py-2">Country</th>

                            <th class="px-4 py-2">Document/Authorization Required</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr id="A">

                                <td class="border px-4 py-2">Afghanistan</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Albania</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Algeria</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Andorra</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Angola</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Anguilla</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Antigua and Barbuda</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Argentina</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Armenia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Australia</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Austria</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Azerbaijan</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="B" class="bg-gray-100">

                                <td class="border px-4 py-2">Bahamas</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Bahrain</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>    

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Bangladesh</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Barbados</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Belarus</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Belgium</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Belize</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Bermuda</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Benin</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Bhutan</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Bolivia (Plurinational State of)</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Bosnia and Herzegovina</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Botswana</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Brazil</td>

                                <td class="border px-4 py-2">TRV/eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Brunei Darussalam</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Bulgaria</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Burkina Faso</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Burundi</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="C">

                                <td class="border px-4 py-2">Cape Verde</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="px-4 py-2">

                                <td class="border px-4 py-2">Cambodia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Cameroon</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Central African Republic</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Chad</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Chile</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">China</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Colombia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Comoros</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Congo</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Costa Rica</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Côte d'Ivoire</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Croatia</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Cuba</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Cyprus</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Czech Republic</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr id="D" class="bg-gray-100">

                                <td class="border px-4 py-2">Denmark</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Djibouti</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Dominica</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Dominican Republic</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="E" class="bg-gray-100">

                                <td class="border px-4 py-2">Ecuador</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Egypt</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">El Salvador</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Equatorial Guinea</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Eritrea</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Estonia</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Ethiopia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="F">

                                <td class="border px-4 py-2">Fiji</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Finland</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">France</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr id="G" class="bg-gray-100">

                                <td class="border px-4 py-2">Gabon</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Gambia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Georgia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Germany</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Ghana</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Greece</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Grenada</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Guatemala</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Guinea</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Guinea-Bissau</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Guyana</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="H">

                                <td class="border px-4 py-2">Haiti</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Honduras</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Hungary</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr id="I" class="bg-gray-100">

                                <td class="border px-4 py-2">Iceland</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">India</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Indonesia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Iran</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Iraq</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Ireland</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Israel (passport holders)</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Israel (holders of travel document in lieu of passport)</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Italy</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Ivory Coast</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="J" class="bg-gray-100">

                                <td class="border px-4 py-2">Jamaica</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Japan</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Jordan</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="K">

                                <td class="border px-4 py-2">Kazakhstan</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Kenya</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Kiribati</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">North Korea</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">South Korea</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Kosovo</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Kuwait</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Kyrgyzstan</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="L">

                                <td class="border px-4 py-2">Laos</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Latvia</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Lebanon</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Lesotho</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Liberia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Libya</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Liechtenstein</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Lithuania</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Luxembourg</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr id="M" class="bg-gray-100">

                                <td class="border px-4 py-2">Macao</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Macedonia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Madagascar</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Malawi</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Malaysia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Maldives</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Mali</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Malta</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Marshall Islands</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Mauritania</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Mauritius</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Mexico</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Micronesia</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Moldova</td>

                                <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                                <td class="border px-4 py-2">Monaco</td>

                                <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Mongolia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Montenegro</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Morocco</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Mozambique</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Myanmar (Burma)</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="N" class="bg-gray-100">

                            <td class="border px-4 py-2">Namibia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Nauru</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Nepal</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Netherlands</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">New Zealand</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Nicaragua</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Niger</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Nigeria</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">North Korea</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">North Macedonia (formerly Macedonia)</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Norway</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr id="O">

                            <td class="border px-4 py-2">Oman</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="P" class="bg-gray-100">

                            <td class="border px-4 py-2">Pakistan</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Palau</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Palestine</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Panama</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Papua New Guinea</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Paraguay</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Peru</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Philippines</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Poland</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Portugal</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr id="Q" class="bg-gray-100">

                            <td class="border px-4 py-2">Qatar</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="R">

                            <td class="border px-4 py-2">Romania</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Russia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Rwanda</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="S" class="bg-gray-100">

                            <td class="border px-4 py-2">Saint Kitts and Nevis</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Saint Lucia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Saint Vincent and the Grenadines</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Samoa</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">San Marino</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Sao Tome and Principe</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Saudi Arabia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Senegal</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Serbia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Seychelles</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Sierra Leone</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Singapore</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Slovakia</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Slovenia</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Solomon Islands</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Somalia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">South Africa</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">South Korea</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">South Sudan</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Spain</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Sri Lanka</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">St. Kitts and Nevis</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">St. Lucia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">St. Vincent and the Grenadines</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Sudan</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Suriname</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Sweden</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Switzerland</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Syria</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="T">

                            <td class="border px-4 py-2">Taiwan</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Tajikistan</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Tanzania</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Thailand</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Timor-Leste (East Timor)</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr class="bg-gray-100">

                            <td class="border px-4 py-2">Togo</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Tonga</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>                       

                            <tr>

                            <td class="border px-4 py-2">Trinidad and Tobago</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Tunisia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Turkey</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Turkmenistan</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                                <td class="border px-4 py-2">Turks and Caicos</td>

                                <td class="border px-4 py-2">eTA</td>

                                </tr>

                            <tr>

                            <td class="border px-4 py-2">Tuvalu</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="U">

                            <td class="border px-4 py-2">Uganda</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Ukraine</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">United Arab Emirates</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">United Kingdom</td>

                            <td class="border px-4 py-2">eTA</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">United States of America</td>

                            <td class="border px-4 py-2">Neither (travel document required at border)</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Uruguay</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Uzbekistan</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="V">

                            <td class="border px-4 py-2">Vanuatu</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Vatican City (Holy See)</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Venezuela</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Vietnam</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Yemen</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr id="Z">

                            <td class="border px-4 py-2">Zambia</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                            <tr>

                            <td class="border px-4 py-2">Zimbabwe</td>

                            <td class="border px-4 py-2">TRV</td>

                            </tr>

                        </tbody>

                    </table> 

                </div>

                    

                <h2 class="text-2xl font-bold mt-10 mb-2 text-gray-700">Frequently Asked Questions about Temporal Resident Visa</h2>

                <div class="w-full mt-4">

                    <div  x-data="{

                                openFaq1: false, 

                                openFaq2: false, 

                                openFaq3: false, 

                                openFaq4: false, 

                                openFaq5: false, 

                                openFaq6: false, 

                                openFaq7: false,

                                openFaq8: false,

                                openFaq9: false,

                                openFaq10: false,}" class="w-full">

                        {{-- single faq 1 --}}

                        <div

                        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"

                            >

                            <button

                            class="faq-btn flex gap-x-2 w-full text-left"

                            @click="openFaq1 = !openFaq1"

                            >

                            <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white"

                            >

                                <svg

                                width="17"

                                height="10"

                                viewBox="0 0 17 10"

                                class="icon fill-current"

                                >

                                <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                />

                                </svg>

                            </div>

                            <div class="w-full">

                                <h4 class="text-lg font-semibold text-black">

                                    What is Temporal Resident Visa (TRV)?

                                </h4>

                            </div>

                            </button>

                            <div x-show="openFaq1" class="faq-content">

                                <p class="py-3 text-base leading-relaxed text-gray-700">

                                    Canadian citizens and Canadian permanent residents have the right to enter Canada freely. Other visitors to Canada, including tourists, students, and workers, may need a Temporary Resident Visa (TRV) from Immigration, Refugees and Citizenship Canada (IRCC) to enter Canada.

                                </p>

                            </div>

                        </div>                                      

                        {{-- single faq 2 --}}

                        <div

                            class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"

                        >

                            <button

                            class="faq-btn flex gap-x-2 w-full text-left"

                            @click="openFaq2 = !openFaq2"

                            >

                            <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"

                            >

                                <svg

                                width="17"

                                height="10"

                                viewBox="0 0 17 10"

                                class="icon fill-current"

                                >

                                <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                />

                                </svg>

                            </div>

                            <div class="w-full">

                                <h4 class="text-lg font-semibold text-black">

                                    Does everyone aspiring Canada Immigrant need Temporal Resident Visa?

                                </h4>

                            </div>

                            </button>

                            <div x-show="openFaq2" class="faq-content">

                            <p class="py-3 text-base leading-relaxed text-gray-700">

                                No. You do not need a Temporary Resident Visa to visit Canada if you are from a visa-exempt country. In this case, a visa-exempt person flying to Canada would need to apply for and obtain an Electronic Travel Authorization (eTA) before boarding his or her flight. If traveling to Canada over land, a visa-exempt person does not need either a TRV or an eTA.

                            </p>

                            <p>Citizens from all other countries must apply for a Temporary Resident Visa before entering Canada, unless otherwise exempt.

                                <br><br>Use our <a href="{{route('visiting_canada')}}" class="text-red-600 hover:underline"></a> to determine what you need to do before traveling to Canada.

                            </p>

                            </div>

                        </div>

                        {{-- single faq 3 --}}

                        <div

                            class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"

                        >

                            <button

                            class="faq-btn flex gap-x-2 w-full text-left"

                            @click="openFaq3 = !openFaq3"

                            >

                            <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary"

                            >

                                <svg

                                width="17"

                                height="10"

                                viewBox="0 0 17 10"

                                class="icon fill-current"

                                >

                                <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                />

                                </svg>

                            </div>

                            <div class="w-full">

                                <h4 class="text-lg font-semibold text-black">

                                    Do I need a Study Permit if I plan to study in Canada?

                                </h4>

                            </div>

                            </button>

                            <div x-show="openFaq3" class="faq-content">

                            <p class="py-3 text-base leading-relaxed text-gray-700">

                                If your studies will last less than six months in Canada, then no Study Permit is required. Any studies beyond six months require a Study Permit, in addition to a Temporary Resident Visa, if you are not from a visa-exempt country.

                            </p>

                            </div>

                        </div>

                        {{-- single faq 4 --}}

                        <div

                                class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"

                            >

                            <button

                                class="faq-btn flex gap-x-2 w-full text-left"

                                @click="openFaq4 = !openFaq4"

                            >

                                <div class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white">

                        <svg

                            width="17"

                            height="10"

                            viewBox="0 0 17 10"

                            class="icon fill-current"

                        >

                            <path

                            d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                            fill="#3056D3"

                            stroke="#3056D3"

                            />

                        </svg>

                        </div>

                        <div class="w-full">

                        <h4 class="text-lg font-semibold text-black">

                            How do I qualify for a Work Permit to work in Canada?

                        </h4>

                        </div>

                        </button>

                        <div x-show="openFaq4" class="faq-content">

                            <p class="py-3 text-base leading-relaxed text-gray-700">

                                There are many ways to qualify for a Work Permit. In some situations, the Canadian employer must demonstrate that they were unable to find Canadian citizens or Canadian permanent residents to fill the position.

                            </p>

                        </div>

                        </div>

                        {{-- single faq 5 --}}

                        <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">

                            <button class="faq-btn flex gap-x-2 w-full text-left" @click="openFaq5 = !openFaq5">

                                <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white"

                                >

                                <svg

                                    width="17"

                                    height="10"

                                    viewBox="0 0 17 10"

                                    class="icon fill-current"

                                >

                                    <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                    />

                                </svg>

                                </div>

                                <div class="w-full">

                                    <h4 class="text-lg font-semibold text-black">

                                        What can I do if my application for a TRV is refused?

                                    </h4>

                                </div>

                            </button>

                            <div x-show="openFaq5" class="faq-content">

                                <p class="py-3 text-base leading-relaxed text-gray-700">

                                    If your TRV application is refused, there is no formal appeal process. In addition, you may only reapply if your situation has changed substantially or you have considerable new information to submit.

                                </p>

                            </div>

                        </div>

                        {{-- single faq 6 --}}

                        <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">

                            <button  class="faq-btn flex gap-x-2 w-full text-left" @click="openFaq6 = !openFaq6">

                                <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white"

                                >

                                <svg

                                    width="17"

                                    height="10"

                                    viewBox="0 0 17 10"

                                    class="icon fill-current"

                                >

                                    <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                    />

                                </svg>

                                </div>

                                <div class="w-full">

                                    <h4 class="text-lg font-semibold text-black">

                                        What can I do to help a friend or family member obtain a TRV to visit Canada?

                                    </h4>

                                </div>

                            </button>

                            <div x-show="openFaq6" class="faq-content">

                                <p class="py-3 text-base leading-relaxed text-gray-700">

                                    If your friend or family member requires a TRV to visit Canada, their initial application must be made outside the country, at the visa office responsible for the applicant's country or region. You may provide them with a Letter of Invitation, explaining how you will help the person to visit Canada. For example, you may state that you will pay for plane tickets or accommodation. While a Letter of Invitation may help a TRV application, it does not guarantee that the person will receive a visa.

                                </p>

                            </div>

                        </div>

                        {{-- single faq 7 --}}

                        <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">

                            <button class="faq-btn flex gap-x-2 w-full text-left" @click="openFaq7 = !openFaq7">

                                <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white"

                                >

                                <svg

                                    width="17"

                                    height="10"

                                    viewBox="0 0 17 10"

                                    class="icon fill-current"

                                >

                                    <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                    />

                                </svg>

                                </div>

                                <div class="w-full">

                                    <h4 class="text-lg font-semibold text-black">

                                        What documents are required for the application?

                                    </h4>

                                </div>

                            </button>

                            <div x-show="openFaq7" class="faq-content">

                                <p class="py-3 text-base leading-relaxed text-body-color">

                                    In addition to the application forms and required fees, you will need to submit photos, proof of financial support, a photocopy of your return ticket or travel itinerary (if applicable), and any other documents required by the visa office responsible for your country or region.

                                </p>

                            </div>

                        </div>

                        {{-- single faq 8 --}}

                        <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">

                            <button class="faq-btn flex gap-x-2 w-full text-left" @click="openFaq8 = !openFaq8">

                                <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white"

                                >

                                <svg

                                    width="17"

                                    height="10"

                                    viewBox="0 0 17 10"

                                    class="icon fill-current"

                                >

                                    <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                    />

                                </svg>

                                </div>

                                <div class="w-full">

                                    <h4 class="text-lg font-semibold text-black">

                                        Do I need a TRV to come to Canada on business?

                                    </h4>

                                </div>

                            </button>

                            <div x-show="openFaq8" class="faq-content">

                                <p class="py-3 text-base leading-relaxed text-body-color">

                                    If you are from a country that requires a visa to visit Canada, you will need to apply for a TRV just like any other visitor to Canada. The application is the same as for a visitor visa. For more information, please visit our page on Business Visitors.

                                </p>

                            </div>

                        </div>

                        {{-- single faq 9 --}}

                        <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">

                            <button class="faq-btn flex gap-x-2 w-full text-left" @click="openFaq9 = !openFaq9">

                                <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white"

                                >

                                <svg

                                    width="17"

                                    height="10"

                                    viewBox="0 0 17 10"

                                    class="icon fill-current"

                                >

                                    <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                    />

                                </svg>

                                </div>

                                <div class="w-full">

                                    <h4 class="text-lg font-semibold text-black">

                                        How can I extend my stay?

                                    </h4>

                                </div>

                            </button>

                            <div x-show="openFaq9" class="faq-content">

                                <p class="py-3 text-base leading-relaxed text-body-color">

                                    You may apply online or using a paper application to extend your status as a temporary resident. You should submit your application for an extended stay in Canada at least 30 days before your status expires. If your temporary resident status expires after you submit your application for an extension but before you receive a decision on the application, you may remain in Canada under maintained status. This status lasts until a decision is made on your new application.

                                </p>

                            </div>

                        </div>

                        {{-- single faq 10 --}}

                        <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">

                            <button class="faq-btn flex gap-x-2 w-full text-left" @click="openFaq10 = !openFaq10">

                                <div

                                class="mr-5 flex h-10 w-2/12 max-w-[40px] items-center justify-center rounded-lg bg-red-200 bg-opacity-5 text-white"

                                >

                                <svg

                                    width="17"

                                    height="10"

                                    viewBox="0 0 17 10"

                                    class="icon fill-current"

                                >

                                    <path

                                    d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"

                                    fill="#3056D3"

                                    stroke="#3056D3"

                                    />

                                </svg>

                                </div>

                                <div class="w-full">

                                    <h4 class="text-lg font-semibold text-black">

                                        How long can I stay in Canada on my TRV?

                                    </h4>

                                </div>

                            </button>

                            <div x-show="openFaq10" class="faq-content">

                                <p class="py-3 text-base leading-relaxed text-body-color">

                                    If there is no stamp, handwritten date or document in your passport indicating an expiry date, your status as a temporary resident will expire six months from the day you arrive in Canada.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>                    

            </div>
            {{-- menu items --}}
            <div class="lg:w-1/4">
                <div class="bg-white p-4 rounded-lg mb-10">
                    <h2 class="text-lg font-bold mb-4">Legal and Advice Options</h2>                
                    <ul class="space-y-3" role="list">
                        <li class=" flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span>
                            <a href="{{route('about')}}">About {{config('app.name')}} Law Frim</a> 
                        </li>               
                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <a href="{{route('professional_cred')}}">Professional Credential</button>
                        </li>
                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <a href="{{route('temp_res_visa')}}">Temporary resident visas</button>
                        </li>
                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span>
                            <a href="{{route('biometrics')}}">Biometrics</button>
                        </li>
                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span>
                            <a href="/terms-of-service">Terms of Use</button>
                        </li>
                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span>
                            <a href="/privacy-policy">Privacy Policy</button>
                        </li> 
                    </ul>
                </div>                 
            </div>
        </div>
    </section>    
    {{-- BLOGS --}}
    <section class="py-12 md:py-16 lg:py-24 xl:py-32">
        <div class="px-4 md:px-8 lg:px-10 max-w-8xl mx-auto">
            <div class="pb-3 border-b mb-6 md:mb-8 flex justify-between flex-wrap gap-y-6">
                <h3 class="hedvig-regular uppercase text-4xl md:text-5xl tracking-wide max-w-xl text-gray-800">Latest
                    Canada immigration news</h3>
                <a href="{{ route('news') }}"
                    class="flex items-center text-md uppercase futura-medium text-rose-700 hover:text-rose-800">
                    View All
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- CARD 1 -->
                @if (count($blogs)>0)
                @foreach ($blogs as $item)
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <div class="relative">
                        <a href="{{$item['url']}}">
                            <img class="w-full h-56"
                                src="{{$item['urlToImage']}}"
                                alt="{{$item['title']}}">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>                       
                    </div>
                    <div class="px-6 py-4 mb-auto">
                        <a href="{{$item['url']}}"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                            {{$item['title']}}
                        </a>                        
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <a href="{{$item['url']}}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Keep reading
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>                       
                    </div>
                </div>
                @endforeach
                @else
                    <div class="py-6 hedvig-regular text-gray-500 text-center text-2xl md:text-3xl tracking-wide">
                        No latest news to display
                    </div>
                @endif
                <!-- CARD ends -->
            </div>
        </div>
    </section>
</x-app-layout>