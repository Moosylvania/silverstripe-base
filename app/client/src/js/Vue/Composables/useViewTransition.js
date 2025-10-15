export const supportsViewTransitions = () => {
    return 'startViewTransition' in document;
}

export default supportsViewTransitions;
