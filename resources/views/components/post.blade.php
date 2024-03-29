
<x-app2>
   

  
                 <!-- Li's Breadcrumb Area End Here -->
            <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                  
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                            @csrf
                                   
                            
                            <form method="POST" action="{{ url('createpro') }}" enctype="multipart/form-data">
                            @csrf
                                    
                                    <input type="hidden" name="usersid" value="{{ Auth::user()->id }}" >
                                <div class="checkbox-form">
                                    <h3>POST PRODUCTS</h3>
                                         <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>NAME<span class="required">*</span></label>
                                                <input placeholder="" name="productname" type="text" value="{{ old('productname') }}">
                                                @error('productname')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Currect Price<span class="required">*</span></label>
                                                <input placeholder="" name="whatsapp" type="number" value="{{ old('whatsapp') }}">
                                                @error('whatsapp')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>State<span class="required">*</span></label>
                                                <select name="state" class="nice-select wide">

                                                    <option data-display="Select State">Select State</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                                    <option value="Anambra">Anambra</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Borno">Borno</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nasarawa">Nasarawa</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Zamfara">Zamfara</option>
                                                </select>
                                            
                                                @error('State')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address<span class="required">*</span></label>
                                                <input placeholder="" name="address" type="text" value="{{ old('address') }}">
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>LGA<span class="required">*</span></label>
                                                <input placeholder="" name="lga" type="text" value="{{ old('lga') }}">
                                                @error('lga')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Profile Picture<span class="required">*</span></label>
                                    <input name="image" type="file" accept="image/*">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                                        <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>NIN Picture<span class="required">*</span></label>
                                    <input name="ninpic" type="file" accept="image/*">
                                    @error('ninpic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                                       

                                       
                                    <div class="col-md-12">
                                    
                                        <div class="default-btn slide-btn">
                                            <button class="links"  type="submit">UPLOAD</button>
                                        </div>
                                    </div>


                            
                          
                        
                                </div>
                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
       

</x-app2>

      