var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var _a;
import { html, css, LitElement } from "https://unpkg.com/lit-element/lit-element.js?module";
import { customElement, property, query } from "https://unpkg.com/lit-element/decorators.js?module";
const FOCUSABLE_ELEMENTS = [
    "a[href]",
    "area[href]",
    'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',
    "select:not([disabled]):not([aria-hidden])",
    "textarea:not([disabled]):not([aria-hidden])",
    "button:not([disabled]):not([aria-hidden])",
    "iframe",
    "object",
    "embed",
    "[contenteditable]",
    '[tabindex]:not([tabindex^="-"])'
];
let Modal = class Modal extends LitElement {
    constructor() {
        super(...arguments);
        this.open = false;
    }
    _getFocusableElements() {
        const elements = this.querySelectorAll(FOCUSABLE_ELEMENTS.join(", "));
        // remove hidden elements
        return Array.from(elements).filter((element) => element.offsetParent);
    }
    _setInitialFocus() {
        const focuasableElements = this._getFocusableElements();
        const focuasableElementsWithoutCloseTargets = focuasableElements.filter((element) => !element.hasAttribute("data-modal-close"));
        if (focuasableElementsWithoutCloseTargets.length > 0) {
            focuasableElementsWithoutCloseTargets[0].focus({
                preventScroll: true
            });
        }
        else if (focuasableElements.length > 0) {
            focuasableElements[0].focus({ preventScroll: true });
        }
    }
    show() {
        // Show the modal and focus the first focusable element
        this.open = true;
        if (this._dialogElem == null)
            return;
        this._dialogElem.showModal();
        this._dialogElem.addEventListener("transitionend", () => this._setInitialFocus(), { once: true });
        // Stop body from scrolling behind modal
        Object.assign(document.body.style, { overflow: "hidden" });
        // Add listeners
        this._dialogElem.addEventListener("keydown", this._escCloseListener);
        this._dialogElem.addEventListener("close", this._dialogCloseListener);
        // Dispatch open event
        this.dispatchEvent(new Event("open"));
    }
    close() {
        // Close the modal
        this.open = false;
        if (this._dialogElem == null)
            return;
        // Mark dialog as closing to animate it out
        this._dialogElem.addEventListener("transitionend", () => {
            this._dialogElem.removeAttribute("closing");
            this._dialogElem.close();
        }, { once: true });
        this._dialogElem.setAttribute("closing", "");
        // Set the aria-expanded attribute to false on any trigger controlling this modal
        const modalId = this.getAttribute("id");
        if (modalId) {
            for (const elem of document.querySelectorAll(`wc-modal-trigger[aria-controls='${modalId}']`)) {
                elem.setAttribute("aria-expanded", "false");
            }
        }
        // Restore body scroll
        Object.assign(document.body.style, { overflow: "" });
        // Remove listeners
        this._dialogElem.removeEventListener("close", this._dialogCloseListener);
        this._dialogElem.removeEventListener("keydown", this._escCloseListener);
        // Dispatch close event
        this.dispatchEvent(new Event("close"));
    }
    _closeWithBackdropClick(event) {
        if (event.target instanceof Element && event.target.nodeName === "DIALOG") {
            this.close();
        }
    }
    _closeWithButtonClick(event) {
        const elem = event.target instanceof Element
            ? event.target.closest("[data-modal-close]")
            : null;
        if (elem == null)
            return;
        event.stopPropagation();
        this.close();
    }
    _closeWithButtonKeyPress(event) {
        const elem = event.target instanceof Element
            ? event.target.closest("[data-modal-close]")
            : null;
        if (elem == null)
            return;
        if (event.code === "Space" || event.code === "Enter") {
            event.preventDefault();
            event.stopPropagation();
            this.close();
        }
    }
    _escCloseListener(event) {
        if (event.code === "Escape") {
            event.preventDefault();
            event.stopPropagation();
            this.close();
        }
    }
    _dialogCloseListener(event) {
        this.close();
    }
    connectedCallback() {
        super.connectedCallback();
        this._escCloseListener = this._escCloseListener.bind(this);
        this._dialogCloseListener = this._dialogCloseListener.bind(this);
        this.addEventListener("click", this._closeWithButtonClick);
        this.addEventListener("keydown", this._closeWithButtonKeyPress);
    }
    firstUpdated() {
        if (this.open) {
            this.show();
        }
    }
    disconnectedCallback() {
        super.disconnectedCallback();
        if (this.open) {
            this.close();
        }
    }
    render() {
        return html `
      <dialog @click=${this._closeWithBackdropClick}>
        <slot></slot>
      </dialog>
    `;
    }
};
Modal.styles = css `
    dialog::backdrop {
      background-color: rgba(0, 0, 0, 0.6);
    }

    dialog[closing]::backdrop {
      background-color: rgba(0, 0, 0, 0);
      transition: background-color var(--modal-close-speed, 300ms) ease-out;
    }

    dialog {
      background: transparent;
      border: none;
      display: block;
      opacity: 0;
      overscroll-behavior: contain;
      padding: 0;
      transform: scale(0.8);
      transition: var(--modal-close-speed, 300ms) ease-out;
      visibility: hidden;
    }

    dialog[open]:not([closing]) {
      opacity: 1;
      overflow: visible;
      transform: scale(1);
      transition: var(--modal-open-speed, 200ms) ease-in;
      visibility: visible;
    }
  `;
__decorate([
    query("dialog"),
    __metadata("design:type", Object)
], Modal.prototype, "_dialogElem", void 0);
__decorate([
    property({ type: Boolean, reflect: true }),
    __metadata("design:type", Boolean)
], Modal.prototype, "open", void 0);
Modal = __decorate([
    customElement("wc-modal")
], Modal);
export { Modal };
let ModalTrigger = class ModalTrigger extends LitElement {
    _open(event) {
        const controlsId = this.getAttribute("aria-controls");
        if (controlsId == null) {
            console.warn("wc-modal-trigger elements need an aria-controls property with a modal id.");
            return;
        }
        const modalElem = document.querySelector(`wc-modal[id='${controlsId}']`);
        if (modalElem == null) {
            console.warn(`Could not find a wc-modal element with an id of ${controlsId}.`);
            return;
        }
        modalElem.show();
        this.setAttribute("aria-expanded", "true");
    }
    _openWithKey(event) {
        if (event.code === "Space" || event.code === "Enter") {
            event.preventDefault();
            this._open();
        }
    }
    connectedCallback() {
        super.connectedCallback();
        this.setAttribute("role", "button");
        this.setAttribute("tabindex", "0");
        this.setAttribute("aria-haspopup", "true");
        this._open = this._open.bind(this);
        this.addEventListener("click", this._open);
        this._openWithKey = this._openWithKey.bind(this);
        this.addEventListener("keydown", this._openWithKey);
    }
    render() {
        return html `
      <slot></slot>
    `;
    }
};
ModalTrigger.styles = css `
    :host {
      cursor: pointer;
    }

    :host([disabled]) {
      cursor: not-allowed;
      pointer-events: none;
    }
  `;
ModalTrigger = __decorate([
    customElement("wc-modal-trigger")
], ModalTrigger);
export { ModalTrigger };