import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { TouristSpotsController } from './tourist-spots.controller';
import { TouristSpotsService } from './tourist-spots.service';
import { TouristSpot } from '../../database/entities/tourist-spot.entity';
import { SpotCategory } from '../../database/entities/spot-category.entity';
import { Barangay } from '../../database/entities/barangay.entity';

@Module({
    imports: [TypeOrmModule.forFeature([TouristSpot, SpotCategory, Barangay])],
    controllers: [TouristSpotsController],
    providers: [TouristSpotsService],
})
export class TouristSpotsModule { } 