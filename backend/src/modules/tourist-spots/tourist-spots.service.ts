import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { TouristSpot } from '../../database/entities/tourist-spot.entity';
import { SpotCategory } from '../../database/entities/spot-category.entity';
import { Barangay } from '../../database/entities/barangay.entity';

@Injectable()
export class TouristSpotsService {
    constructor(
        @InjectRepository(TouristSpot)
        private touristSpotRepository: Repository<TouristSpot>,
        @InjectRepository(SpotCategory)
        private spotCategoryRepository: Repository<SpotCategory>,
        @InjectRepository(Barangay)
        private barangayRepository: Repository<Barangay>,
    ) { }

    async getAllTouristSpots(): Promise<TouristSpot[]> {
        return this.touristSpotRepository.find({
            relations: ['barangay', 'category', 'images'],
            where: { is_active: true },
            order: { name: 'ASC' },
        });
    }

    async getTouristSpotBySlug(slug: string): Promise<TouristSpot | null> {
        return this.touristSpotRepository.findOne({
            where: { slug },
            relations: ['barangay', 'category', 'images'],
        });
    }

    async getFeaturedTouristSpots(): Promise<TouristSpot[]> {
        return this.touristSpotRepository.find({
            relations: ['barangay', 'category', 'images'],
            where: { is_featured: true, is_active: true },
            order: { name: 'ASC' },
        });
    }

    async getAllCategories(): Promise<SpotCategory[]> {
        return this.spotCategoryRepository.find({
            where: { is_active: true },
            order: { sort_order: 'ASC', name: 'ASC' },
        });
    }
} 