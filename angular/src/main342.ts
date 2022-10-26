// function writeValue(val: string | null ="jannat") {
//     console.log(`Value: ${val ?? "Fallback value"}`)
//    }
//    writeValue("London");
//    writeValue(null);

function writeValue(val: number | null =0) {
    console.log(`Value: ${val ?? "Fallback value"}`)
   }
   writeValue(200);
   writeValue();
   writeValue(null);