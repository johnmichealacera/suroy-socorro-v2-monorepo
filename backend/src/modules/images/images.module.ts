import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { ImagesService } from './images.service';
import { Image } from '../../database/entities/image.entity';

@Module({
    imports: [TypeOrmModule.forFeature([Image])],
    providers: [ImagesService],
    exports: [ImagesService],
})
export class ImagesModule { } 