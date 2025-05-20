let FollowBox = "#Wrap .FollowBox";
gsap.set(FollowBox, {
    xPercent: -50, yPercent: -50, scale: 0,
});

window.addEventListener('mousemove', e => {
    gsap.to(FollowBox, 0.5, {
        x: e.clientX, y: e.clientY, stagger: 0.15, ease: "none",
    });

    let TL = gsap.timeline({
        defaults: { duration: 0.5, ease: "none", },
    })
    TL.to(FollowBox, {
        scale: 1,
        stagger: { amount: 0.15, from: "start", ease: "none", }
    })
    TL.to(FollowBox, {
        scale: 0,
        stagger: { amount: 0.15, from: "end", ease: "none", }
    }, "<+=2.5")
});