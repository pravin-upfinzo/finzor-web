// Core Banking Solution SVG script
async function loadSVG(url, containerId) {
    try {
        const response = await fetch(url);
        const svgText = await response.text();
        document.getElementById(containerId).innerHTML = svgText;
    } catch (error) {
        console.error("Error loading SVG:", error);
    }
}
// Example: Load multiple SVGs

// product banner
loadSVG("./assets/images/product_banner/core_banking_solutions.svg", "banner_svg");


// Section 1
loadSVG("./assets/images/cbs_image.svg", "section_1_svg");


// Section 2
loadSVG("./assets/images/features.svg", "section_2_card_1_svg");
loadSVG("./assets/images/features.svg", "section_2_card_2_svg");
loadSVG("./assets/images/features.svg", "section_2_card_3_svg");
// icons
loadSVG("./assets/images/innovate_icon_1.svg", "section_3_icon_1_svg");
loadSVG("./assets/images/innovate_icon_2.svg", "section_3_icon_2_svg");
loadSVG("./assets/images/innovate_icon_3.svg", "section_3_icon_3_svg");


// Section 3
loadSVG("./assets/images/product_sec_3_images/corenexus.svg", "section_3_svg");



// // Feature card icon
// loadSVG("./assets/images/corenexus-feature-card-icons/open-api.svg", "feature_card_1_svg");
// loadSVG("./assets/images/corenexus-feature-card-icons/ckyc.svg", "feature_card_2_svg");
// loadSVG("./assets/images/corenexus-feature-card-icons/cash-management.svg", "feature_card_3_svg");
// loadSVG("./assets/images/corenexus-feature-card-icons/digital-payments.svg", "feature_card_4_svg");
// loadSVG("./assets/images/corenexus-feature-card-icons/cbs.svg", "feature_card_5_svg");
// loadSVG("./assets/images/corenexus-feature-card-icons/ai-enhancement.svg", "feature_card_6_svg");
// loadSVG("./assets/images/corenexus-feature-card-icons/regulatory.svg", "feature_card_7_svg");


// Get in touch
loadSVG("./assets/images/Robot hand.svg", "robot_hand_svg");

