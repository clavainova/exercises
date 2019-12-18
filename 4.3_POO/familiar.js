export class Familiar {
    constructor(id, name, frames, width, height, scale) {
        this.id = id;
        this.name = name;
        this.framesFreq = frames;
        this.width = width;
        this.height = height;
        this.scale = scale;
        this.scaledWidth = this.width * this.scale;
        this.scaledHeight = this.height * this.scale;
    }

    getImgUrl() {
        return ("spritesheet/" + this.id + ".png");
    }

    getCycleLoop() {
        let arr = [];
        for (let i = 0; i < this.frames; i++) {
            arr.push(i);
        }
        for (let i = this.frames; i > 0; i--) {
            arr.push(i);
        }
        console.log(arr);
        return arr;
    }
}