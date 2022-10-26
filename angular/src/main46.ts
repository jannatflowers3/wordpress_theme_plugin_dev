function composeString(val: number) : string {
    return `Composed string: ${val}`;
   }
   function writeValue(val?: number) {
    console.log(composeString(val ?? 50));
   }
//    writeValue("London");
   writeValue();