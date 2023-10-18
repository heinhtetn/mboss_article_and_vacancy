    @extends('layouts.app')
    @section('extra-css')
        <style>
            header{
            background-color: #000;
        }
        section{
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url('{{ asset('assets/img/banner-edit.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 80vh;
            background-attachment: fixed;
        }
        </style>
    @endsection
    @section('content')

    <section></section>
    <!-- End breadcrumbs section -->
    <div class="faq-page sec-mar">
        <div class="container">
            <div class="row gy-5 justify-content-lg-between justify-content-center">
                <div class="col-lg-4">
                    <div class="faq-items">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About Selling</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">About Buying</button>
                            </li>
                          </ul>
                          
                    </div>

                    
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" id="myTabContent">
                        <!--About Selling-->
                        
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!--General-->
                            <h3 style="text-transform: uppercase; color: #FFCA33;">General</h3>
                            <div class="accordion" id="accordionExample1">
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="GheadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGOne" aria-expanded="true" aria-controls="collapseGOne">
                                        Is M Boss registered by any government body?
                                    </button>
                                  </h5>
                                  <div id="collapseGOne" class="accordion-collapse collapse show" aria-labelledby="headingGOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, M Boss Technologies Co., Ltd. is a registered corporation at DICA that operates as an online marketplace for receivable invoices.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingGTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGTwo" aria-expanded="false" aria-controls="collapseGTwo">
                                        How does it work?
                                    </button>
                                  </h5>
                                  <div id="collapseGTwo" class="accordion-collapse collapse" aria-labelledby="headingGTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There is a one-time registration, Know Your Customer (KYC) process which is very similar to banks. Once the registration process is completed, you are able to post the invoices in M Boss’s platform. M Boss does its due diligence of confirming the validity of the invoices posted. Once approved, your invoice will be posted on our online platform and buyers make bids on an online auction. After the auction you can request to get your funds.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingGThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGThree" aria-expanded="false" aria-controls="collapseGThree">
                                        How do we know if our business is eligible for M Boss’s services?
                                    </button>
                                  </h5>
                                  <div id="collapseGThree" class="accordion-collapse collapse" aria-labelledby="headingGThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        So long as your company fits the following criteria:
                                        1. Legally registered in Myanmar (Corporation / Partnership / Sole Proprietor).
                                        2. The company engages in business-to-business, service now pay later model.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingGFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGFour" aria-expanded="false" aria-controls="collapseGFour">
                                        What invoice amounts will be accepted?
                                    </button>
                                  </h5>
                                  <div id="collapseGFour" class="accordion-collapse collapse" aria-labelledby="headingGFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        M Boss will accept an invoice with at least a minimum value of MMK 1,000,000.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingGFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGFive" aria-expanded="false" aria-controls="collapseGFive">
                                        What is the discount rate?
                                    </button>
                                  </h5>
                                  <div id="collapseGFive" class="accordion-collapse collapse" aria-labelledby="headingGFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The discount rate is based on the payment behavior and credit rating of your clients through a proprietary algorithm that measures the risk of delay and default of payments. It also takes into account the financial standing of your client and how long the invoice has been outstanding. M Boss asks for an average discount rate of 2%-5% of the invoice face value per 30-day cycle. For example, if the maturity date/payment term of your invoice is scheduled to be paid in 60 days, then the discount rate will be multiplied by 2.
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                              <!--Application-->
                              <h3 class="mt-5" style="text-transform: uppercase; color: #FFCA33;">Application</h3>
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingAOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAOne" aria-expanded="false" aria-controls="collapseAOne">
                                            How do I sign up as a SME?
                                        </button>
                                    </h5>
                                    <div id="collapseAOne" class="accordion-collapse collapse show" aria-labelledby="headingAOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            1. Sign up in M Boss’s platform: Link
                                            2. Verify your email
                                            3. Complete your ‘Know-Your-Customer’ (KYC) requirements
                                            4. Entering Memorandum of Agreement with M Boss
                                            5. Once your account is verified, you can start uploading your invoices for invoice selling at a discounted price.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingATwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseATwo" aria-expanded="false" aria-controls="collapseATwo">
                                            What are the KYC requirements?
                                        </button>
                                    </h5>
                                    <div id="collapseATwo" class="accordion-collapse collapse" aria-labelledby="headingATwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            1.Personal Information
                                            2. Business Information
                                            3. Valid Identity
                                            Soft copy of NRC / Passport
                                            Soft copy of NRC / Passport of authorized persons
                                            
                                            4. At least one (1) latest Billing Statement billed to the Company Address
                                            Utility Bills (i.e. Electric, Water, etc.)
                                            Copy of Company Bank Book / Bank Statement
                                            
                                            5. Business Documents
                                            
                                            Company Registration Card
                                            Articles of Association (if applicable)
                                            Memorandum of Association
                                            Form 6, Form 26
                                            BOD resolution to open platform trading account and appointment of an authorized person to perform all action relating with invoice selling in M Boss’s platform (stating NRC number)
                                            *For Import/Export business, licenses of import/export are required
                                            
                                            *We only accept JPEG, PNG, and PDF file type with a maximum of 5MB per file.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingAThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAThree" aria-expanded="false" aria-controls="collapseAThree">
                                            Which banks are accepted?
                                        </button>
                                    </h5>
                                    <div id="collapseAThree" class="accordion-collapse collapse" aria-labelledby="headingAThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            For fund deposit - All registered banks and wallets in Myanmar.
                                            For fund release/disbursement - All registered banks and wallets in Myanmar
                                            **There may be some banking charges depend on your selected banks..
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <!--Transaction-->
                                <h3 class="mt-5" style="text-transform: uppercase; color: #FFCA33;">Transcation</h3>
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            How much of my invoice will be supported?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can sell 100% of your invoice - less the any tax (i.e. Commercial Tax, Withholding Tax, etc.). We only support the face value of the invoice, hence any Tax amount which will be collected from your client will be credited to you on the collection date.
                                            The responsibility of related tax payments which arise from your original transaction with your client is rest on you.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How soon will my invoice be put up for sale from invoice upload?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Invoice approval and validation usually take about 24 hours (during business days). Upon approval, your invoice will be scheduled for auction equating to a total of 2 days. Once an invoice has been awarded to the winning buyer, the funds will automatically be reflected in your e-wallet and it is ready for a withdrawal request.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How do you compute for the discount rate?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You give us a list of your clients and we will check the credibility of your clients. This means company background research. The initial discount will be based on your clients (1) Financial Standing, (2) Info in Supplier Payments - how long do they actually pay, (3) Size of your invoice. The higher the financial standing, the lower the rate and vice versa. If your client on average pays 30 days after the due date, we’ll also add 30 days on top of your invoice due date. All of this is factored in to give you an initial discount rate for your invoice.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Are the discount rates fixed?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The system will only be providing initial rates because during the Invoice Auction, invoice buyers will be bidding down on your invoices. So for example you may initially get a total discount of 5% but through the bidding system it has potential to decrease to 4% or 3%.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Are there any fees?
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We will deduct an invoice posting and processing fee of 2% of the total face value of the invoice once your invoice has been sold and any applicable taxes.
                                        </div>
                                    </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                How do you verify the invoices?
                                            </button>
                                        </h5>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Verifying your invoice will take in 3 forms:<br>
                                                1. We directly contact your client - by means of calling or sending an email.<br>
                                                2. You send an email confirmation for the invoices to your client and put BCC us in the email exchanges.<br>
                                                3. Providing us with supporting documents (a) Contract with your client, (b) Receiving copies /stamped invoice from your client, (c) Purchase order from your client, (d) Any evidence that can support that the service/product is completed.
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingSeven">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    What exactly are M Boss asking from your client?
                                                </button>
                                            </h5>
                                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    We’ll resend them an invoice copy and verify the details:
                                                    (a) Invoice Amount
                                                    (b) Applicable taxes
                                                    (c) Date of Collection
                                                </div>
                                            </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                        Are there any legal implications to selling an invoice?
                                                    </button>
                                                </h5>
                                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        When you have successfully sold your invoice, you are legally transferring the invoice ownership from you to the buyer of the invoice (through the Standard Terms and Conditions of Sales and Mutual Agreement), you are also transferring the risk of late payments. This also means that your invoice buyer will have the right to collect from your client if it passes the expected date of payment.
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h5 class="accordion-header" id="headingNine">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                            How do I make a withdrawal?
                                                        </button>
                                                    </h5>
                                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            Log in to your account<br>
                                                            1. In your sidebar, click ‘Withdraw’ menu<br>
                                                            2. Fill in the necessary details<br>
                                                            3. Click ‘Continue’ button<br>
                                                            4. A confirmation will prompt you that the request is successful.<br>
                                                            <span style="color: red;">*The maximum amount for withdrawal is MMK 100,000,000.00. For withdrawal requests more than MMK 100,000,000.00, you can make a separate ticket.</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h5 class="accordion-header" id="headingTen">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                                How fast is fund disbursement upon request for a withdrawal?
                                                            </button>
                                                        </h5>
                                                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Upon withdrawal request, a transfer from your e-wallet to your company bank account will take 1 to 3 business working days depending on your selected bank. (to include bank clearings).
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h5 class="accordion-header" id="headingEleven">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                                    What happens when my Invoice is not sold?
                                                                </button>
                                                            </h5>
                                                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    In the unlikely event that your invoice is not successfully bought, you may choose resell that invoice for the next auction or (or you may withdraw your invoices from the platform) it goes through the normal terms of payment with your client.
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h5 class="accordion-header" id="headingTwelve">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                                        Can we apply for another invoice sale if we already have an active invoice sale with M Boss?
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        Yes, you may apply for a subsequent invoice sale with M Boss as long as it is within your transaction cap.
                                                                    </div>
                                                                </div>
                                                                </div>
                                </div>

                                <!--Payment & Collection-->
                            <h3 class="mt-5" style="text-transform: uppercase; color: #FFCA33;">Payment & Collection</h3>
                            <div class="accordion" id="accordionExample1">
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingPOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePOne" aria-expanded="false" aria-controls="collapsePOne">
                                        Who collects payment for the invoices I have sold in the M Boss Platform?
                                    </button>
                                  </h5>
                                  <div id="collapsePOne" class="accordion-collapse collapse show" aria-labelledby="headingPOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        M Boss will collect the payment on behalf of the invoice buyer.<br> 
                                        M Boss’s collection team will follow up on the payments of your clients and we will collect on your behalf. All you have to do is to authorize us to collect from your client. Given that you have already assigned your invoice to the buyer, the buyer now takes on the risks of late payment. And since we are directly collecting the whole amount from your client, we will remit the tax payment paid by your client to you and we will hold only the invoice face value.<br>
                                            1. Cash collection requires only an authorization letter from the SME.<br>
                                            2. If your clients make bank transfers directly to your bank account, you have to immediately remit the repayment amount value back to the segregated account in within 24 hours. If you fail to remit within the same date of funds receiving from your client, you will be imposed penalties in daily penalties<br>
                                            3. Cheque Payments collection or Cash collection requires an authorization letter from the SME and a cheque from the SME addressing to M Boss’s segregated account<br>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingPTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePTwo" aria-expanded="false" aria-controls="collapsePTwo">
                                        What happens when my client fails to pay on the due date of the invoice?
                                    </button>
                                  </h5>
                                  <div id="collapsePTwo" class="accordion-collapse collapse" aria-labelledby="headingPTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        M Boss uses a proprietary algorithm to measure the risk of delay and default of payments. Our company considers previous payment behavior and incorporates in the expected days of repayment and collection. If your client on average pays 30 days after the due date, we’ll also add 30 days on top of your invoice due date. This will now be the adjusted due date.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingPThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePThree" aria-expanded="false" aria-controls="collapsePThree">
                                        What happens when my client fails to pay on the adjusted due date of the invoice?
                                    </button>
                                  </h5>
                                  <div id="collapsePThree" class="accordion-collapse collapse" aria-labelledby="headingPThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Selling your invoice means assigning its risks to its buyers. You’ll be asked to assist in collecting from your client from time to time and if needed but it is ultimately the Buyer’s responsibility to follow up payment.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingPFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePFour" aria-expanded="false" aria-controls="collapsePFour">
                                        What is the standard process of collecting payments from the Payors?
                                    </button>
                                  </h5>
                                  <div id="collapsePFour" class="accordion-collapse collapse" aria-labelledby="headingPFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        M Boss introduces itself as your 3rd party collections agency. M Boss gives out reminders 5 days before the due date. On the due date of the invoice, and once the invoice falls delinquent we do a daily reminder until we have received a pay date promise from your clients. This is all done in the most respectful manner as our value proposition to our SMEs is making sure their business relationship with their clients improves with M Boss.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingPFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePFive" aria-expanded="false" aria-controls="collapsePFive">
                                        Who can be the buyers of my invoices
                                    </button>
                                  </h5>
                                  <div id="collapsePFive" class="accordion-collapse collapse" aria-labelledby="headingPFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Your invoices will be bought by investor who tend to be high net worth individuals or institutional investors, or hedge funds
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingPSix">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePSix" aria-expanded="false" aria-controls="collapsePSix">
                                        Will my clients know if I have sold the invoice
                                      </button>
                                    </h5>
                                    <div id="collapsePSix" class="accordion-collapse collapse" aria-labelledby="headingPSix" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        Yes, your clients related with the invoices that you are going to sell may be aware that you have sold the invoices as we have to ask your clients as a process of invoice verification for your invoices.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingPSeven">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePSeven" aria-expanded="false" aria-controls="collapsePSeven">
                                        How can we contact M Boss for additional questions and concerns?
                                      </button>
                                    </h5>
                                    <div id="collapsePSeven" class="accordion-collapse collapse" aria-labelledby="headingPSeven" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        You can email us at info@M Boss.co for any queries and our team will get back to you within 1 hours (between 9:00 AM - 6:00 PM of a business day Yangon Time).
                                      </div>
                                    </div>
                                  </div>
                              </div>
                        </div>

                        <!--About Buying-->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!--General-->
                            <h3 style="text-transform: uppercase; color: #FFCA33;">General</h3>
                            <div class="accordion" id="accordionExample1">
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="GheadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGOne" aria-expanded="true" aria-controls="collapseGOne">
                                        Is M Boss registered by any government body?
                                    </button>
                                  </h5>
                                  <div id="collapseGOne" class="accordion-collapse collapse show" aria-labelledby="headingGOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, M Boss Technologies Co., Ltd. is a registered corporation at DICA that operates as an online marketplace for receivable invoices.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingGTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGTwo" aria-expanded="false" aria-controls="collapseGTwo">
                                        How does it work?
                                    </button>
                                  </h5>
                                  <div id="collapseGTwo" class="accordion-collapse collapse" aria-labelledby="headingGTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There is a one-time registration, Know Your Customer (KYC) process which is very similar to banks. Once the registration process is completed, you are able to post the invoices in M Boss’s platform. M Boss does its due diligence of confirming the validity of the invoices posted. Once approved, your invoice will be posted on our online platform and buyers make bids on an online auction. After the auction you can request to get your funds.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingGThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGThree" aria-expanded="false" aria-controls="collapseGThree">
                                        How does M Boss assess the Payors?
                                    </button>
                                  </h5>
                                  <div id="collapseGThree" class="accordion-collapse collapse" aria-labelledby="headingGThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        M Boss primarily focuses on assessing the Payors, who are the clients of the Invoice Sellers. We evaluate the financial standing and reputation of Payors, taking into account their transactional history and risk of delay and default. Our assessment is based on the experiences of both the Payor and the Seller, ensuring a thorough evaluation of the transaction's potential risks.
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                              <!--Application-->
                              <h3 class="mt-5" style="text-transform: uppercase; color: #FFCA33;">Application</h3>
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingAOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAOne" aria-expanded="false" aria-controls="collapseAOne">
                                            How do I sign up as a SME?
                                        </button>
                                    </h5>
                                    <div id="collapseAOne" class="accordion-collapse collapse show" aria-labelledby="headingAOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            1. Sign up in M Boss’s platform: Link
                                            2. Verify your email
                                            3. Complete your ‘Know-Your-Customer’ (KYC) requirements
                                            4. Entering Memorandum of Agreement with M Boss
                                            5. Once your account is verified, you can start uploading your invoices for invoice selling at a discounted price.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingATwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseATwo" aria-expanded="false" aria-controls="collapseATwo">
                                            What are the KYC requirements?
                                        </button>
                                    </h5>
                                    <div id="collapseATwo" class="accordion-collapse collapse" aria-labelledby="headingATwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            1.Personal Information
                                            2. Business Information
                                            3. Valid Identity
                                            Soft copy of NRC / Passport
                                            Soft copy of NRC / Passport of authorized persons
                                            
                                            4. At least one (1) latest Billing Statement billed to the Company Address
                                            Utility Bills (i.e. Electric, Water, etc.)
                                            Copy of Company Bank Book / Bank Statement
                                            
                                            5. Business Documents
                                            
                                            Company Registration Card
                                            Articles of Association (if applicable)
                                            Memorandum of Association
                                            Form 6, Form 26
                                            BOD resolution to open platform trading account and appointment of an authorized person to perform all action relating with invoice selling in M Boss’s platform (stating NRC number)
                                            *For Import/Export business, licenses of import/export are required
                                            
                                            *We only accept JPEG, PNG, and PDF file type with a maximum of 5MB per file.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingAThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAThree" aria-expanded="false" aria-controls="collapseAThree">
                                            Which banks are accepted?
                                        </button>
                                    </h5>
                                    <div id="collapseAThree" class="accordion-collapse collapse" aria-labelledby="headingAThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            For fund deposit - All registered banks and wallets in Myanmar.
                                            For fund release/disbursement - All registered banks and wallets in Myanmar
                                            **There may be some banking charges depend on your selected banks..
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <!--Buying Receivables-->
                                <h3 class="mt-5" style="text-transform: uppercase; color: #FFCA33;">Buying receivables</h3>
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingBOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBOne" aria-expanded="false" aria-controls="collapseBOne">
                                                How do I begin Buying?
                                            </button>
                                        </h5>
                                        <div id="collapseBOne" class="accordion-collapse collapse" aria-labelledby="headingBOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p style="color: #B5B5B5;">
                                                    You can browse for the receivables for sale in the "Marketplace" menu on the sidebar of your dashboard. We will remind you via email at least one (1) day before the next auction, so you have enough time to deposit funds in your account.
                                                </p>
                                                <p style="color: #B5B5B5;">
                                                    To bid, your e-wallet balance should be equal or more than the face value of the invoice you are bidding for. So if you are bidding for a receivables worth MMK 10,000,000.00, your e-wallet balance should be equal to or more than this amount. Otherwise, you will not be able to bid for that particular receivable.
                                                </p>
                                                <p style="color: #B5B5B5;">
                                                    The exciting part of the auction is the competition. Remember that you are competing with other Funders during the auction, and someone may also be observing to outbid your current bid.
                                                </p>
                                                <p style="color: #B5B5B5;">
                                                    Once you have placed a bid on a receivable, an amount equal to half of the invoice value will be held (meaning, you cannot use that amount to bid for other receivables) until the auction is done or someone outbids you.
                                                </p>
                                                <p style="color: #B5B5B5;">In case you win the auction, M Boss will take the full amount from your e-wallet and the awarded invoice will be assigned to you (a “Standard Terms & Conditions of Sale” and Mutual Agreement). If you are unsuccessful in the auction, the amount held from you will be given back to your e-wallet, so you can participate the next bidding. You can bid as many invoices as you want as long as you have enough balance in your e-wallet.</p>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingBTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBTwo" aria-expanded="false" aria-controls="collapseBTwo">
                                                    As Funders, what are we buying?
                                                </button>
                                            </h5>
                                            <div id="collapseBTwo" class="accordion-collapse collapse" aria-labelledby="headingBTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p style="color: #B5B5B5;">
                                                        As corporate/individual Funder in our platform, you will be funding the invoices of SMEs with promising projects; an alternative investment platform.
                                                    </p>
                                                    <p style="color: #B5B5B5;">
                                                        By buying receivables, you will be a catalyst for the growth of SMEs so they do not have to wait for them to get paid. This will help them grow the business faster.
                                                    </p>
                                                    <p style="color: #B5B5B5;">
                                                        When you have successfully bought an invoice, the Seller is legally transferring the invoice ownership from them to you, the Funder of the invoice (through the “Standard Terms & Conditions of Sale” and Mutual Agreement), they are also transferring the risk of late payments. This also means that you are the Funder of the invoice will have the right to collect from your client if it passes the expected date of payment.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingBThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBThree" aria-expanded="false" aria-controls="collapseBThree">
                                                        How will be know if the invoices are legitimate?
                                                    </button>
                                                </h5>
                                                <div id="collapseBThree" class="accordion-collapse collapse" aria-labelledby="headingBThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Verifying an invoice takes 3 forms:<br>
                                                        1. We directly contact the client of Invoice Seller - by means of calling or sending an email.<br>
                                                        2. Invoice Seller send an email confirmation to their client for the invoices for sale and put BCC us in the email exchanges. We’ll resend to the Invoice Seller’ client an invoice copy and verify the details:<br>
                                                        (a) Invoice Amount<br>
                                                        (b) Applicable taxes<br>
                                                        (c) Date of Collection<br>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingBFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBFour" aria-expanded="false" aria-controls="collapseBFour">
                                                    May I know the details of the Seller after I bought the receivables?
                                                </button>
                                            </h5>
                                            <div id="collapseBFour" class="accordion-collapse collapse" aria-labelledby="headingBFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    During the auction, we can disclose the name of the SME’s client(s). Rest assured, the company’s public data will be provided to you. In addition, their risk scores of delay or default payment will be included.
                                                </div>
                                            </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingBFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBFive" aria-expanded="false" aria-controls="collapseBFive">
                                                How long is the bidding/auction of the receivables?
                                            </button>
                                        </h5>
                                        <div id="collapseBFive" class="accordion-collapse collapse" aria-labelledby="headingBFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Starting from 9:00 am to 1:00 pm.
                                            </div>
                                        </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingBSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBSix" aria-expanded="false" aria-controls="collapseBSix">
                                            How much is the average value per invoice?
                                        </button>
                                    </h5>
                                    <div id="collapseBSix" class="accordion-collapse collapse" aria-labelledby="headingBSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The invoices are sold as one, which means one invoice is for one Funder. Average per invoice value ranges from MMK 1,000,000 – MMK 100,000,000
                                        </div>
                                    </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingBSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBSeven" aria-expanded="false" aria-controls="collapseBSeven">
                                        How are discount rates determined?
                                    </button>
                                </h5>
                                <div id="collapseBSeven" class="accordion-collapse collapse" aria-labelledby="headingBSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="color: #B5B5B5;">
                                            M Boss determines the floor price for the bidding of the invoices, which varies depending on the delay and default risk of an invoice.
                                        </p>
                                        <p style="color: #B5B5B5;">
                                            The initial discount will be based on the Invoice Seller’s clients (Payor) (1) Financial Standing, (2) Info in Supplier Payments - how long do they actually pay, (3) Size of the invoice. The higher the financial standing, the lower the rate and vice versa. If the Payor on average pays 30 days after the due date, we’ll also add 30 days on top of the invoice due date. All of this is factored in to give you an initial discount rate for the invoice.
                                        </p>
                                        <p style="color: #B5B5B5;">
                                            The initial discount will be based on the Invoice Seller’s clients (Payor) (1) Financial Standing, (2) Info in Supplier Payments - how long do they actually pay, (3) Size of the invoice. The higher the financial standing, the lower the rate and vice versa. If the Payor on average pays 30 days after the due date, we’ll also add 30 days on top of the invoice due date. All of this is factored in to give you an initial discount rate for the invoice.
                                        </p>
                                        <p style="color:#B5B5B5;">
                                            Funders will then bid out for the invoice within 4 hours, and the winner with the closest bid to the X% (of invoice value) ceiling price wins.
                                        </p>
                                        <p style="color: #B5B5B5;">
                                            Sample Computation:<br>
                                            Invoice Value: 100,000<br>
                                            Monthly Discount Rate: 3%<br>
                                            Total Days till Maturity (number of days delay incorporated): 47<br>
                                            Total Rate: 4.7% (47 days * 3%/30)<br>
                                            Total Discount Amount (Gross Funder Earning): 4,700<br>
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBEight" aria-expanded="false" aria-controls="collapseBEight">
                                    What are the fees associated with buying invoices?
                                </button>
                            </h5>
                            <div id="collapseBEight" class="accordion-collapse collapse" aria-labelledby="headingBEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    25% (service fee) of your gross earnings will be deducted as part of M Boss’s service fee. *Exclusive of the 5% commercial tax of the 25% service fee.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBNine" aria-expanded="false" aria-controls="collapseBNine">
                                    What is the default rate?
                                </button>
                            </h5>
                            <div id="collapseBNine" class="accordion-collapse collapse" aria-labelledby="headingBNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Currently, our default rate is 0.00%<br>
                                    Based on our scoring system, we are not accepting invoices that have risks of default. It is very important for us to make sure that our default rates in the platform are within banking/financing standards. More so, the higher the risk of the invoice, the higher discount rates we provide.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBTen" aria-expanded="false" aria-controls="collapseBTen">
                                    Is the gain on purchase of invoice I earned taxable?
                                </button>
                            </h5>
                            <div id="collapseBTen" class="accordion-collapse collapse" aria-labelledby="headingBTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, the gain on purchase of invoice is taxable and can be considered as another source of income (assuming that the FUNDER has a main source of income). It will be your responsibility to declare your earnings and income from transacting in M Boss Platform.<br>
                                    Both Local and Foreign Funders are still subjected to the Commercial Tax of M Boss’s service fee.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBEleven" aria-expanded="false" aria-controls="collapseBEleven">
                                    Why does the Face Value of the invoice differ from the Invoice Amount in the physical invoice copy?
                                </button>
                            </h5>
                            <div id="collapseBEleven" class="accordion-collapse collapse" aria-labelledby="headingBEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    These are just the common reasons for this:
                                    1. Withholding Tax
                                    2. Commercial Tax; are already deducted from the Invoice Amount – we show only the original goods or services amount.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBTwelve" aria-expanded="false" aria-controls="collapseBTwelve">
                                    What happens if the invoice repayment defaults?
                                </button>
                            </h5>
                            <div id="collapseBTwelve" class="accordion-collapse collapse" aria-labelledby="headingBTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    In the rare event of a default, M Boss is on standby to pursue fund collection. If it fails, we would assist our Funders in taking legal action to exercise the rights on the invoice. As a Funder you have the legal and collection recourse from the Payor, being the owner of the invoice. Collection activities will be fully passed on to the Funder once after the invoice reaches 30 days beyond the adjusted due date of the invoice.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBThirteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBThirteen" aria-expanded="false" aria-controls="collapseBThirteen">
                                    How do I minimize the risk?
                                </button>
                            </h5>
                            <div id="collapseBThirteen" class="accordion-collapse collapse" aria-labelledby="headingBThirteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Like any other investment, we encourage our Funders to diversify your investments in different invoices. If you plan to buy in a low scored invoice, we highly suggest you also back it up with conservative invoices to even the odds.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBFourteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBFourteen" aria-expanded="false" aria-controls="collapseBFourteen">
                                    Can I cancel an invoice that I have already bought?
                                </button>
                            </h5>
                            <div id="collapseBFourteen" class="accordion-collapse collapse" aria-labelledby="headingBFourteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Once you have bought an invoice, you cannot cancel it. This is to be fair with the SMEs, as an attempt to back out from such agreement would disrupt the whole business process. With this, we highly suggest that you properly review all available invoices for auction/sale before confirming.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBFiveteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBFiveteen" aria-expanded="false" aria-controls="collapseBFiveteen">
                                    When is the repayment made?
                                </button>
                            </h5>
                            <div id="collapseBFiveteen" class="accordion-collapse collapse" aria-labelledby="headingBFiveteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Repayment is made after a clearing period once the invoice falls due.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBSixteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBSixteen" aria-expanded="false" aria-controls="collapseBSixteen">
                                    Who handles the collection?
                                </button>
                            </h5>
                            <div id="collapseBSixteen" class="accordion-collapse collapse" aria-labelledby="headingBSixteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    M Boss collects from the Payor on behalf of the Funder of the invoice.<br>
                                    M Boss’s collection team will follow up on the payments of Seller’s clients and we will collect on your behalf. Invoice Seller gives us authorization to collect on behalf of them to collect payments from their clients.<br>
                                    From the collection, M Boss has a prescribed number of business working days to clear the payment. (1 to 3 business working days)<br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBSeventeen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBSeventeen" aria-expanded="false" aria-controls="collapseBSeventeen">
                                    How do I make a withdrawal
                                </button>
                            </h5>
                            <div id="collapseBSeventeen" class="accordion-collapse collapse" aria-labelledby="headingBSeventeen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    1. Log in to your account<br>
                                    2. In your sidebar, click ‘Withdraw’ menu<br>
                                    3. Fill in the necessary details<br>
                                    4. Click ‘Continue’ button<br>
                                    5. A confirmation will prompt you that the request is successful.<br>
                                    <span style="color: red;">*The maximum amount for withdrawal is 100,000,000 MMK. For withdrawal requests more than 100,000,000 MMK, you can make a separate ticket. *Depending on the bank, you can get the amount in as fast as real-time up to 3 business days.</span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingBEighteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBEighteen" aria-expanded="false" aria-controls="collapseBEighteen">
                                    What legalities have you set to be able to ensure the invoice subrogation and payment?
                                </button>
                            </h5>
                            <div id="collapseBEighteen" class="accordion-collapse collapse" aria-labelledby="headingBEighteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The Invoice Seller is bound by the contract with M Boss to transfer the collection and economic rights of the invoice to the Funder of the invoice.<br>
                                    Once an invoice is awarded to you, you will receive a soft copy of the “Standard Terms & Conditions of Sale”, it will be the prerogative of the Funder if you wish to strengthen the “Standard Terms & Conditions of Sale” through signing and stamping the document. M Boss will assist in the getting the authorized signatories and the stamping but it will be the Funder who will shoulder the stamping fees.
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <!--General-->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="accordion" id="accordionExample3">
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingOne2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                        Aliquam ligula nunc, vehicula at est quis.
                                    </button>
                                  </h5>
                                  <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
                                        himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ex. 
                                        placerat felis non aliquam.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingTwo2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        In hac habitasse platea dictumst Cras leo.
                                    </button>
                                  </h5>
                                  <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
                                        himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ex. 
                                        placerat felis non aliquam.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingThree2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                        ornare iaculis tellus. Phasellus venenatis.
                                    </button>
                                  </h5>
                                  <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
                                        himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ex. 
                                        placerat felis non aliquam.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingFour2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                        Phasellus a placerat eros In hac habitasse.
                                    </button>
                                  </h5>
                                  <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
                                        himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ex. 
                                        placerat felis non aliquam.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingFive2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">
                                        Phasellus a placerat eros In hac habitasse.
                                    </button>
                                  </h5>
                                  <div id="collapseFive2" class="accordion-collapse collapse" aria-labelledby="headingFive2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
                                        himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ex. 
                                        placerat felis non aliquam.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h5 class="accordion-header" id="headingSix2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix2" aria-expanded="false" aria-controls="collapseSix2">
                                        Phasellus a placerat eros In hac habitasse.
                                    </button>
                                  </h5>
                                  <div id="collapseSix2" class="accordion-collapse collapse" aria-labelledby="headingSix2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
                                        himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ex. 
                                        placerat felis non aliquam.
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                      </div>
                 
                </div>
            </div>
        </div>
    </div>


    @endsection