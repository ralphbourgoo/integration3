// void Update()
// {
//    if(Input.GetMouseButtonUp(0))
//   {
//      GetComponent<Animation>().Stop();
//   }
// }

// public void Shoot()
// {
//     if(Input.GetMouseButtonDown(0)) // Mouse left button
//     {
//        GetComponent<Animation>().Play();
//     }
// }

// stop animation
document.body.style.setProperty("--toggle", "0");
document.body.style.setProperty("--playState", "paused");

// play animation
document.body.style.setProperty("--toggle", "1");
document.body.style.setProperty("--playState", "running");
