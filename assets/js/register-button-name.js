// wp.domReady(() => {
//     function modifyButtonStyleLabel() {
//         document.querySelectorAll('.block-editor-block-styles__item').forEach((button) => {
//             if (button.textContent.trim() === 'Default') {
//                 button.querySelector('span').textContent = 'Primary Filled'; // Change label only
//             }
//         });
//     }

//     // Run once when the editor loads
//     modifyButtonStyleLabel();

//     // Use MutationObserver to apply changes dynamically when UI updates
//     const observer = new MutationObserver(() => modifyButtonStyleLabel());
//     observer.observe(document.body, { childList: true, subtree: true });
// });
