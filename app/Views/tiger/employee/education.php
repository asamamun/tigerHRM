<div class="d-flex justify-content-between bg-primary border-bottom">
    <button class="btn btn-primary">
        <h4>Education:</h4>
    </button>
    <button id="eduBtn" class="btn btn-primary btn-lg"><i class="fa-solid fa-circle-plus"></i></button>
</div>
<fieldset id="educationcontainer">
    <?php echo form_open('tiger/education/add'); ?>
    <?php echo form_hidden('id', $emp['id']); ?>
    <div class="row ms-2">

        <div class="row col-6">
            <div class="col-md-6">
                <label class="labels">Level</label>
                <select name="level" id="" class="form-control">
                    <option value="ssc">select</option>
                    <option value="psc">PSC</option>
                    <option value="hsc">JSC/JDC</option>
                    <option value="ssc">SSC</option>
                    <option value="hsc">HSC</option>
                    <option value="hsc">Diploma</option>
                    <option value="hsc">Bachelor/Honors</option>
                    <option value="hsc">Masters</option>
                    <option value="hsc">PhD (Doctor of Philosophy)</option>
                </select>
            </div>
            <div class="col-md-6"><label class="labels">Institute</label><input type="text" name="institute" class="form-control" value=""></div>

            <div class="col-md-6"><label class="labels">Borad</label><input type="text" name="borad" class="form-control" value=""></div>

            <div class="col-md-6"><label class="labels">Major</label>
                <select name="major" id="major" class="form-control">
                    <option value="Bachelor of Science (BSc)">Bachelor of Science (BSc)</option>
                    <option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>
                    <option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>
                    <option value="Bachelor of Commerce (Pass)">Bachelor of Commerce (Pass)</option>
                    <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                    <option value="Bachelor of Medicine and Bachelor of Surgery(MBBS)">Bachelor of Medicine and Bachelor of Surgery(MBBS)</option>
                    <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                    <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                    <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                    <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                    <option value="Bachelor of Physical Education (BPEd)">Bachelor of Physical Education (BPEd)</option>
                    <option value="Bachelor of Law (LLB)">Bachelor of Law (LLB)</option>
                    <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                    <option value="Bachelor of Social Science (BSS)" selected="selected">Bachelor of Social Science (BSS)</option>
                    <option value="Bachelor of Fine Arts (B.F.A)">Bachelor of Fine Arts (B.F.A)</option>
                    <option value="Bachelor of Business Studies (BBS)">Bachelor of Business Studies (BBS)</option>
                    <option value="Bachelor of Computer Application (BCA)">Bachelor of Computer Application (BCA)</option>
                    <option value="Fazil (Madrasah)">Fazil (Madrasah)</option>
                    <option value="Bachelor in Engineering (BEngg)">Bachelor in Engineering (BEngg)</option>
                    <option value="others" undefined="">Other</option>
                </select>
            </div>
            <div class="btn d-grid">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </div>



    <div class="row col-6">

        <div class="col-md-6"><label class="labels">Passing Year</label>
            <select class="form-control" name="passingyear" id="passingyear">
                <option value="-1">Year</option>
                <option value="2027">2030</option>
                <option value="2027">2029</option>
                <option value="2027">2028</option>
                <option value="2027">2027</option>
                <option value="2026">2026</option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022" selected="">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1967">1966</option>
                <option value="1967">1965</option>
                <option value="1967">1964</option>
                <option value="1967">1963</option>
                <option value="1967">1962</option>
                <option value="1967">1961</option>
            </select>
        </div>
        <div class="col-md-6"><label class="labels">Marks/CGPA</label><input type="text" name="result" class="form-control" value=""></div>
        <div class="col-md-6"><label class="labels">Start Year</label><input type="date" name="startyear" class="form-control" value=""></div>
        <div class="col-md-6"><label class="labels">End Year</label><input type="date" name="endyear" class="form-control" value=""></div>



        <div class="btn d-grid">
            <input type="button" value="Cancel" class="btn btn-secondary" id="eduCancelBtn">
        </div>
    </div>
    </div>
    <?php echo form_close(); ?>

</fieldset>


<!-- loop -->
<?php if ($empeducation) { ?>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>Level</th>
                <th>Institute</th>
                <th>Board</th>
                <th>Major</th>
                <th>Passing Year</th>
                <th>Marks/CGPA</th>
                <th>Start year</th>
                <th>End year</th>
                <th>Action</th>
            </tr>
            <!-- <tr>
                <td>SSC</td>
            </tr>
            <tr>
                <td>hsc</td>
            </tr> -->
        </thead>
        <tbody>
            <?php
            foreach ($empeducation as $education) {
            ?>
                <tr>
                    <td><?php echo $education['level'] ?></td>
                    <td><?php echo $education['institute'] ?></td>
                    <td><?php echo $education['board'] ?></td>
                    <td><?php echo $education['major'] ?></td>
                    <td><?php echo $education['year'] ?></td>
                    <td><?php echo $education['score'] ?></td>
                    <td><?php echo $education['start_date'] ?></td>
                    <td><?php echo $education['end_date'] ?></td>
                    <td><button><i class="fa-solid fa-pen-to-square"></i></button> | <button class="bg-danger"><i class="fa-solid fa-trash"></i></button></div>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php } else { ?>
    <strong class="bg-warning d-grid text-center">Education info not found. Add Please!</strong>
<?php } ?>