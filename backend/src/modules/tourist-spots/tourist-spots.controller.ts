import { Controller, Get, Param } from '@nestjs/common';
import { TouristSpotsService } from './tourist-spots.service';
import { TouristSpot } from '../../database/entities/tourist-spot.entity';
import { SpotCategory } from '../../database/entities/spot-category.entity';

@Controller('api/v1/tourist-spots')
export class TouristSpotsController {
    constructor(private readonly touristSpotsService: TouristSpotsService) { }

    @Get()
    getAllTouristSpots(): Promise<TouristSpot[]> {
        return this.touristSpotsService.getAllTouristSpots();
    }

    @Get('featured')
    getFeaturedTouristSpots(): Promise<TouristSpot[]> {
        return this.touristSpotsService.getFeaturedTouristSpots();
    }

    @Get('categories')
    getAllCategories(): Promise<SpotCategory[]> {
        return this.touristSpotsService.getAllCategories();
    }

    @Get(':slug')
    getTouristSpotBySlug(@Param('slug') slug: string): Promise<TouristSpot | null> {
        return this.touristSpotsService.getTouristSpotBySlug(slug);
    }
} 