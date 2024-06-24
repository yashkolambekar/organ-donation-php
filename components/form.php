<form action="" method="post">
                <div class="mt-4">
                    <label for="fullname">
                        <p class="text-[0.7em]">Full Name</p>
                    </label>
                    <input name="fullname" id="fullname" class="md:min-w-[400px] p-2 rounded bg-[#360c0a] mt-1" type="text" placeholder="Divija Rupesh Patil">
                </div>
                <div class="mt-4">
                    <label for="age">
                        <p class="text-[0.7em]">Age</p>
                    </label>
                    <input name="age" id="age" required class="md:min-w-[400px] p-2 rounded bg-[#360c0a] mt-1" type="number" placeholder="23">
                </div>
                <div class="mt-4">
                    <label for="">
                        <p class="text-[0.7em]">Gender</p>
                    </label>
                    <label for="gendermale">
                        <input required name="gender" value="male" id="gendermale" class="inline p-2 rounded bg-[#360c0a] mt-1" type="radio" placeholder="23">
                        <p class="mr-3 ml-1 inline text-[0.9em]">Male</p>
                    </label>
                    <label for="genderfemale">
                        <input required id="genderfemale" value="female" name="gender" class="inline p-2 rounded bg-[#360c0a] mt-1" type="radio" placeholder="23">
                        <p class="mr-3 ml-1 inline text-[0.9em]">Female</p>
                    </label>
                    <label for="genderothers">
                        <input required id="genderothers" value="others" name="gender" class="inline p-2 rounded bg-[#360c0a] mt-1" type="radio" placeholder="23">
                        <p class="mr-3 ml-1 inline text-[0.9em]">Others</p>
                    </label>
                </div>
                <div class="mt-4">
                    <label for="medicalid">
                        <p class="text-[0.7em]">Medical ID</p>
                    </label>
                    <input name="medicalid" id="medicalid" class="md:min-w-[400px] p-2 rounded bg-[#360c0a] mt-1" type="number" placeholder="">
                </div>
                <div class="mt-4">
                    <label for="bloodgroup">
                        <p class="text-[0.7em]">Blood Group</p>
                    </label>
                    <select id="bloodgroup" name="bloodgroup" required class="md:min-w-[400px] p-2 rounded bg-[#360c0a] mt-1" type="number" placeholder="">
                        <option disabled selected>--SELECT--</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                    </select>
                </div>
                <div class="mt-4">
                    <label for="hospital">
                        <p class="text-[0.7em]">Hospital</p>
                    </label>
                    <select id="hospital" name="hospital" required class="md:min-w-[400px]  md:max-w-[400px] p-2 rounded bg-[#360c0a] mt-1" placeholder="">
                        <option disabled selected>--SELECT--</option>
                        <option value="Apollo Hospital Navi Mumbai.">Apollo Hospital Navi Mumbai.</option>
                        <option value="Asian Heart Institute, Bandra">Asian Heart Institute, Bandra</option>
                        <option value="B.Y.L Nair Hospital, Dr. A.L.Nair Road">B.Y.L Nair Hospital, Dr. A.L.Nair Road</option>
                        <option value="Bhaktivedanta Hospital & Research Insitute, Mira Road, Thane">Bhaktivedanta Hospital & Research Insitute, Mira Road, Thane</option>
                        <option value="Bombay Hospital, 2, New Marine Lines, Mumbai- 400020">Bombay Hospital, 2, New Marine Lines, Mumbai- 400020</option>
                        <option value="Breach Candy Hospital, 60-A,Bhulabhai Desai Road, Mumbai-400026">Breach Candy Hospital, 60-A,Bhulabhai Desai Road, Mumbai-400026</option>
                        <option value="Fortis Hospital, Mulund Goregaon Link Road, Mumbai-400078">Fortis Hospital, Mulund Goregaon Link Road, Mumbai-400078</option>
                    </select>
                </div>
                <div class="mt-4">
                    <label for="">
                        <p class="text-[0.7em]">Organ</p>
                    </label>
                    <label for="organkidney">
                        <input name="organ[]" value="kidney" id="organkidney" class="inline p-2 rounded bg-[#360c0a] mt-1" type="checkbox" placeholder="23">
                        <p class="mr-3 ml-1 inline text-[0.9em]">Kidney</p>
                    </label>
                    <label for="organliver">
                        <input value="liver" name="organ[]" id="organliver" class="inline p-2 rounded bg-[#360c0a] mt-1" type="checkbox" placeholder="23">
                        <p class="mr-3 ml-1 inline text-[0.9em]">Liver</p>
                    </label>
                    <label for="organheart">
                        <input name="organ[]" value="heart" id="organheart" class="inline p-2 rounded bg-[#360c0a] mt-1" type="checkbox" placeholder="23">
                        <p class="mr-3 ml-1 inline text-[0.9em]">Heart</p>
                    </label>
                    <label for="organeyes">
                        <input id="organeyes" name="organ[]" value="eyes" class="inline p-2 rounded bg-[#360c0a] mt-1" type="checkbox" placeholder="23">
                        <p class="mr-3 ml-1 inline text-[0.9em]">Eyes</p>
                    </label>
                </div>
                <div class="mt-4">
                    <label for="weight">
                        <p  class="text-[0.7em]">Weight (kg)</p>
                        <input required name="weight" id="weight" class="md:min-w-[400px] p-2 rounded bg-[#360c0a] mt-1" type="number" placeholder="53">
                    </label>
                </div>
                <div class="mt-4">
                    <label for="height">
                        <p class="text-[0.7em]">Height (cm)</p>
                        <input id="height" required name="height" class="md:min-w-[400px] p-2 rounded bg-[#360c0a] mt-1" type="number" placeholder="121">
                    </label>
                </div>
                <div class="py-4">
                    <button class="w-full bg-green-500 p-3 rounded" type="submit">Submit</button>
                </div>
            </form>