import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Image } from '../../database/entities/image.entity';

@Injectable()
export class ImagesService {
    constructor(
        @InjectRepository(Image)
        private imageRepository: Repository<Image>,
    ) { }

    async getImagesByTouristSpotId(touristSpotId: number): Promise<Image[]> {
        return this.imageRepository.find({
            where: { tourist_spot_id: touristSpotId, is_active: true },
            order: { sort_order: 'ASC', created_at: 'ASC' },
        });
    }

    async getImageByType(touristSpotId: number, imageType: string): Promise<Image | null> {
        return this.imageRepository.findOne({
            where: { tourist_spot_id: touristSpotId, image_type: imageType, is_active: true },
        });
    }

    async createImage(imageData: Partial<Image>): Promise<Image> {
        const image = this.imageRepository.create(imageData);
        return this.imageRepository.save(image);
    }
} 