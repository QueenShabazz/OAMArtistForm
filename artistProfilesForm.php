<section class="interior-page single">

    <div class="container">
        <div class="row">
            <div class="col-md-12 content-page">
            <form class="artform form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col">
                            <b>
                                <h6>Hey Artist! What's your name, and how can we reach you?</h6>
                            </b>
                        </div>
                        <div class="col top">
                            <div class="col-sm-1 input-group-prepend">
                                <label for="fullname" class="control-label col-sm-2">
                                    <i class="fa fa-user-circle"></i>
                                    <p>Name </p>
                                </label>
                            </div>
                            <div class="col-sm-11">
                                <input class="form-control" type="text" name="fullname" id="fullname" required>
                            </div>
                        </div>


                    </div>
                    <div class="form-group">

                        <div class="col top">
                            <div class="col-sm-1 input-group-prepend">
                                <label for="email" class="control-label col-sm-2">
                                    <i class="fa fa-at"></i>
                                    <p> Email </p>
                                </label>
                            </div>
                            <div class="col-sm-11">
                                <input class="form-control" type="email" name="email" id="email" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col top">
                            <div class="col-sm-1 input-group-prepend">
                                <label for="phone" class="control-label col-sm-2">
                                    <i class="fa fa-phone"></i>
                                    <p>Number</p>
                                </label>
                            </div>
                            <div class="col-sm-11">
                                <input class="form-control" type="tel" id="phone" name="phone"
                                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="555-555-555" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col">
                            <b>
                                <h6>What is your affiliation with Oakland?</h6>
                            </b>
                        </div>

                        <label class="control-label col-sm-12">
                            <input name="liveaffil" type="checkbox" />
                            <p class="col-md-6"> Live in Oakland (please provide address, note this is for internal use
                                and will not be published)
                            </p>
                            <textarea class="form-control" rows="2" cols="50" style="resize:none;"
                                name="liveaffilBlurb"> </textarea>
                        </label>
                        <label class="control-label  col-sm-12">
                            <input name="workaffil" type="checkbox" />
                            <i class="fa fa-work"></i>
                            <p class="col-md-6"> Work or have a studio in Oakland (please provide address, note this is
                                for internal use and will not be published)</p>
                            <textarea class="form-control" rows="2" cols="50" style="resize:none;"
                                name="workaffilBlurb"> </textarea>
                        </label>

                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-md-12">
                            <label class="control-label">
                                <b>
                                    <h6>Please list links to artists web site, Facebook page, Instagram account,
                                        Pinterest or other digital presence, separated by commas.</h6>
                                </b>
                            </label>
                            <ul class="col-md-12">
                                <li class="col-md-12">
                                    <i class="col-md fa fa-facebook"> </i>
                                    <input class="col-md-11 form-control" type="text" name="facebook">

                                </li>
                                <li class="col-md-12">
                                    <i class="col-md fa fa-instagram"> </i>
                                    <input type="text" name="instagram" class="col-md-11 form-control">
                                </li>
                                <li class="col-md-12">
                                    <i class="col-md fa fa-pinterest"> </i>
                                    <input type="text" name="pinterest" class="col-md-11 form-control">
                                </li>
                                <li class="col-md-12">
                                    <i class="col-md fa fa-youtube"> </i>
                                    <input type="text" name="youtube" class="col-md-11 form-control">
                                </li>
                                <li class="col-md-12">
                                    <i class="col-md fa fa-globe"> </i>
                                    <input type="text" name="site" class="col-md-11 form-control">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-row">
                        <div class="col-md-12">
                            <b for="file[]">Please upload 1-8 jpegs / pngs showing your work </b>
                            <input class="form-control" type="file" name="file[]" accept="image/png, image/jpeg"
                                multiple>
                        </div>

                        <div class=col-md-12>
                            <b> Is your work (check all that apply)</b>
                            <br>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="2dmade"
                                    value="2D made to hang on a wall ">
                                <p>2D made to hang on a wall </p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" value="2dmural" name="2dmural">
                                <p>2D mural painted directly on a wall </p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="3dmade">
                                <p>3D made to hang on a wall </p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="3dceil">
                                <p>3D meant to hang from the ceiling</p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="3dex">
                                <p>3D meant to be experienced in the round</p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="installbased">
                                <p> Installation-based</p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="misc">
                                <p>Light, digital, or other media</p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox">
                                <p>Other </p>
                                <input class="form-control" type="text" id="otherValue" name="otherWork">

                            </label>
                        </div>


                        <div class="col-md-12">
                            <b> Is your work made primarily from (check all that apply) </b>
                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="paint">
                                <p>Paint</p>
                            </label>

                            <label class="control-label">
                                <input class="form-control" type="checkbox" name="photography">
                                <p>Photography</p>
                            </label>

                            <label class="control-label"> <input class="form-control" type="checkbox" name="fiber">
                                Fiber or textile</label>

                            <label class="control-label"> <input class="form-control" type="checkbox" name="wood">
                                Wood</label>

                            <label class="control-label"> <input class="form-control" type="checkbox" name="metal">
                                Metal</label>

                            <label class="control-label"> <input class="form-control" type="checkbox" name="glass">
                                Glass</label>

                            <label class="control-label"> <input class="form-control" type="checkbox" name="ceramic">
                                Ceramic</label>

                            <label class="control-label"> <input class="form-control" type="checkbox"> Mixed media or
                                other</label>
                            <input type="text" id="otherMedia" name="otherMedia">

                        </div>
                    </div>

                    <div class="form-row">
                        <b>
                            <h6> Some people are looking to support diversity by supporting artists who are aligned with
                                certain social groups. If you would like to be identified with one of the following
                                groups, please check as many as apply:</h6>
                        </b>
                        <label class="control-label"> <input class="form-control" type="checkbox" name="Black" />
                            Black</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="Asian" />
                            Asian</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="Pacific" />
                            Pacific Islander</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="Native" />
                            Native American</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="LatinX">
                            LatinX</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="SouthEast" />
                            South-East Asian</label>

                        <label class="control-label"><input class="form-control" type="checkbox" name="Euro" />
                            Euro-Caucasian</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="LGBTQ" />
                            LGBTQ</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="Disabled">
                            Disabled</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="Other">
                            Other</label>
                        <input type="text" id="otherRace" name="otherRace">
                        <br>
                        <br>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <b>How long have you been a practicing artist?</b>
                            <select name="years">
                                <option value="0-3 years">0-3 years
                                </option>
                                <option value="3-5 years">3-5 years
                                </option>
                                <option value="5-10 years">5-10 years
                                </option>
                                <option value="10+ years">10+ years
                                </option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <b>Some people are looking to purchase or show work of a certain size. Would you say the
                                work you have to offer is typically:</b>
                            <select name="size">
                                <option value="Small (under 24 inches wide)">Small (under 24 inches wide)
                                </option>
                                <option value="Medium (24-48 inches wide)">Medium (24-48 inches wide)
                                </option>
                                <option value="Large (48-84 inches wide)">Large (48-84 inches wide)
                                </option>
                                <option value="Extra-large (7-12 ft wide)">Extra-large (7-12 ft wide)
                                </option>
                                <option value="Monumental (12-80 ft wide)">Monumental (12-80 ft wide)
                                </option>
                            </select>
                        </div>
                    </div>
                    <b>
                        <h6>Some people are looking to purchase or show work of a certain price-point. Would you say the
                            work you have to offer is typically sold for: (check all that apply?)</h6>
                    </b>

                    <label class="control-label"> <input class="form-control" type="checkbox" name="under100"
                            value="art sold under $100"> Under $100</label>

                    <label class="control-label"> <input class="form-control" type="checkbox" name="btw100500"
                            value="art sold between $100-$500"> $100-$500</label>

                    <label class="control-label"> <input class="form-control" type="checkbox" name="btw5001500"
                            value="art sold between $100-$500"> $500-1500</label>

                    <label class="control-label"> <input class="form-control" type="checkbox" name="btw5001500"
                            value="art sold between $1500-5,000"> $1500-5,000</label>

                    <label class="control-label"> <input class="form-control" type="checkbox" name="btw500015"
                            value="art sold between $5,000-$15,000"> $5,000-15,000</label>

                    <label class="control-label"> <input class="form-control" type="checkbox" name="btw1530000"
                            value="art sold between $15,000-$30,000"> $15,000-30,000</label>

                    <label class="control-label"> <input class="form-control" type="checkbox" name="Over"
                            value="art sold over $30,000"> Over $30,000</label>


                    <b>
                        <h6> What kinds of opportunities are you seeking? (check all that apply)</h6>
                    </b>
                    <div>
                        <label class="control-label"> <input class="form-control" type="checkbox" name="privatecoll"
                                value="Seeking sales to private collectors"> Sales to private collectors</label>
                    </div>
                    <div class="form-row">
                        <label class="control-label"> <input class="form-control" type="checkbox" name="corpclients"
                                value="Seeking sales to corporate and commercial clients"> Sales to corporate and
                            commercial clients</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="consultants"
                                value="Seeking relationships with consultants, designers, architects" /> Relationships
                            with consultants, designers, architects</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="commissions"
                                value="Seeking commissions" /> Commissions</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="exhibitions"
                                value="Seeking exhibitions" /> Exhibitions</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="galleries"
                                value="Seeking relationships with galleries"> Relationships with galleries</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="opportunities"
                                value="Seeking public Art opportunities"> Public Art Opportunities</label>

                        <label class="control-label"> <input class="form-control" type="checkbox" name="mediapub"
                                value="Seeking media publicity"> Media publicity</label>

                        <label class="control-label"> <input class="form-control" type="checkbox"> Other</label>
                        <input type="text" id="OtherMedia" name="otherOps">
                    </div>
            
            <br>
            <b>
                <h6>Artist Mission Statement</h6>
            </b>
            <textarea class="form-control" name="message"></textarea>
            <input type="hidden" name="action" value="contact_form">
            <br>

            <input class="btn btn-dark" type="submit" name="subMit" value="Submit Application">




            </form>
            </div>

        </div>
    </div>

</section>