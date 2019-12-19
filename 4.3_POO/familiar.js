export class Familiar {
    constructor(id, name, frames, width, height) {
        this.id = parseInt(id, 10);
        this.name = name;
        let fr = parseInt(frames, 10);
        this.frames = fr - 1;
        this.width = parseInt(width, 10);
        this.height = parseInt(height, 10);
        this.scale = parseInt(scale, 10);
    }

    getProp(index) {
        return this[index];
    }

    getImgUrl() {
        return ("spritesheet/" + this.id + ".png");
    }

    getCycleLoop() {
        if(this.frames == 0){
            let arr = [0, 0, 0];
        }
        else{
            let arr = [];
            for (let i = 0; i < this.frames; i++) {
                arr.push(i);
            }
            for (let i = this.frames; i > 0; i--) {
                arr.push(i);
            }
            // console.log(arr);
            return arr;
        }
        
    }
}