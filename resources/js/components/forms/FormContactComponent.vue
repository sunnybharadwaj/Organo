<template>
    <div class="contact-form">
        <form action="">
            <div class="form-item">
                <label for="full-name">Name</label>
                <div class="sub-label">Your first, last name</div>
                <input type="text" id="full-name" placeholder="Full Name">
            </div>
            
            <div class="form-item">
                <label for="email">Email</label>
                <div class="sub-label">Where can we reach you?</div>
                <input type="text" id="email" placeholder="Email Address">
            </div>

            <div class="form-item">
                <label for="who">Who are you?</label>
                <div class="sub-label">What best describes you from the list below?</div>
                <select name="" id="who">
                    <option default value="Resident" class="default-selected">Click here to select</option>
                    <option value="Resident">Click here to select</option>
                    <option value="Resident">Click here to select</option>
                    <option value="Resident">Click here to select</option>
                    <option value="Resident">Click here to select</option>
                </select>
            </div>

            <div class="form-item">
                <label for="subject">Subject</label>
                <div class="sub-label">What is this message regarding?</div>
                <select name="" id="subject">
                    <option value="Resident">Learn more about Organo</option>
                    <option value="Resident">Host an event</option>
                    <option value="Resident">Organo@School</option>
                    <option value="Resident">Partner with us</option>
                    <option value="Resident">Feedback</option>
                    <option value="Resident">Others</option>
                </select>
            </div>

            <div class="form-item">
                <label for="message">Message</label>
                <div class="sub-label">Explain your issue with all pertinent details.</div>
                <textarea name="" id="message" rows="5"></textarea>
            </div>
            <div class="mb-12"></div>
            <button>
                <div class="lg-button">Submit</div>
            </button>

        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>